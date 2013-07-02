<?php include('../includes/dbconnect.php'); ?>
<?php include('../includes/lib.php'); ?>
<?php
	header('Content-type: application/json');
	
	//read json from request
	$data = json_decode($_POST['data']);
	
	if (VERSION <> $data->{'version'})
	{
		$response = new Response(0,"Access denied");
	}
	else	
	{
		$user_id = $data->{'user_id'};
		$access_key = $data->{'access_key'};
		
		//open databse connection
		$conn = openDBCon();
		
		//verify user existance
		$sql = "SELECT user_id, tag_1, tag_2, completed_requests FROM fb_user ";
		$sql .= " WHERE user_id = " . $user_id ;
		$sql .= " AND access_key = '" . $access_key . "'";
		
		//echo $sql;
			
		$rs = mysql_query($sql);
		
		$row = mysql_fetch_assoc($rs);
		
		if (mysql_num_rows($rs) == 0)
		{
			$response = new Response(0,"Access denied");		
		}
		else
		{
			$response = new Response(1,"Success");
						
			//Sync Friends
			$sql = "SELECT friend.friend_id, ";
			$sql .= " fb_user.user_id as friend_user_id, fb_user.fb_user_id, fb_user.name, fb_user.profile_picture,";
			$sql .= " fb_user.is_registered,fb_user.tag_1, fb_user.tag_2 , ";
			$sql .= " friend.tag_1 as my_tag_1, friend.tag_2 as my_tag_2, friend.tag_status,";
			$sql .= " fb_user.completed_requests ";
			$sql .= " FROM friend ";
			$sql .= " JOIN fb_user ON (fb_user.user_id = friend.friend_user_id) ";
			$sql .= " WHERE friend.my_user_id = " . $user_id;
			$sql .= " AND UPPER(fb_user.name) like '%" . strtoupper($data->{'name'}) . "%'";
			$sql .= " ORDER BY fb_user.completed_requests, fb_user.is_registered, friend.tag_1";
			
			//echo $sql;
				
			$rs = mysql_query($sql);
			
			while($row = mysql_fetch_assoc($rs)) 
			{
				$response->friends[] = $row; //Friends
			}

		}
		
		//close databse connection
		closeDBCon($conn);		
	}
	
	//send response
	echo json_encode($response);
	
//response class definition
class Response{
	public $code;
	
	public $message;
	
	public $friends;
	
	public function __construct($iCode, $iMessage ){
		$this->code = $iCode;
		$this->message = array();
		$this->message[] = $iMessage;
		
		$this->friends = array();
	}
}		
?>