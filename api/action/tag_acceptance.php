<?php include('../includes/dbconnect.php'); ?>
<?php
	header('Content-type: application/json');
	
	//read json from request
	$data = json_decode($_POST['data']);
	
	$access_key= $data->{'access_key'};
	$from_user_id = $data->{'from_user_id'};
	$to_user_id = $data->{'to_user_id'};
	$action_flag = $data->{'action_flag'};
	
	//open databse connection
	$conn = openDBCon();
	
	//verify user existance
	$sql = "SELECT user_id ";
	$sql .= " FROM fb_user ";
	$sql .= " WHERE user_id = " . $from_user_id . " AND ";
	$sql .= " access_key='" . $access_key . "'";
	
	// echo $sql;
	
	$rs = mysql_query($sql);
	
	if (mysql_num_rows($rs)>0){ 
		
		$sql = "SELECT friend_id, tag_1, tag_2, tag_status,is_updated  ";
		$sql .= " FROM friend " ;
		$sql .= " WHERE my_user_id = " . $to_user_id;
		$sql .= " AND friend_user_id = " . $from_user_id ;
		
		//echo $sql;
	   
		$rs=mysql_query($sql);
		
		$today = gmdate('Y-m-d H:i:s', time());
		
		if(mysql_num_rows($rs) > 0){
		
			$row = mysql_fetch_assoc($rs);
			
			$r_friend_id = $row["friend_id"];
			$r_tag_status = $row["tag_status"];
			$r_tag_1 = $row["tag_1"];
			$r_tag_2 = $row["tag_2"];
			$r_is_updated = $row["is_updated"];
			
			
			$sql = "SELECT friend_id, tag_status  ";
			$sql .= " FROM friend " ;
			$sql .= " WHERE my_user_id = " . $from_user_id ;
			$sql .= " AND friend_user_id = " . $to_user_id;
			
			// echo $sql;
		   
			$rs=mysql_query($sql);
			
			if (mysql_num_rows($rs)>0){ 

				$row = mysql_fetch_assoc($rs);
			
				$s_friend_id = $row["friend_id"];
				$s_tag_status = $row["tag_status"];
				
			}else{
				//Add Friend
				//==========
				$sql = " INSERT into friend ";
				$sql .= " (my_user_id, friend_user_id, created_date) values (";
				$sql .= $from_user_id . ",";			
				$sql .= $to_user_id . ",";
				$sql .= "'" . $today . "')";
			
				//echo $sql;
						
				mysql_query($sql);
						
				$s_friend_id = mysql_insert_id();
				$s_tag_status = 0;
			}
			
			$completed_requests = 0;
						
			$response = new Response(1,"Sucess"); 
			
			if ($action_flag == 1){ //accept tag
			
				$sql = " UPDATE friend SET ";
				$sql .= " tag_status = 1,";
				
				if ($r_is_updated == 1){
					$sql .= " is_updated = 0,";
				}
				
				$sql .= " tag_acceptance_date = '" . $today . "', ";
				$sql .= " modified_date = '" . $today . "' ";
				$sql .= " WHERE friend_id = " . $r_friend_id;
				
				//echo $sql;
				
				mysql_query($sql);
				
				if ($s_tag_status == 1 && $r_tag_status == 0 && $r_is_updated == 0){ // verify that the sender also have accepted tag request.
					$completed_requests = 1; //increase by one
					
					//Update Sender's profile
					$sql = " UPDATE fb_user SET ";
					$sql .= " completed_requests = completed_requests + 1, ";
					$sql .= " modified_date = '" . $today . "' ";
					$sql .= " WHERE user_id = " . $to_user_id; 
					
					mysql_query($sql);
				}
				
			}else{//reject tag
				$sql = " UPDATE friend SET ";
				$sql .= " tag_1 = 0,";
				$sql .= " tag_2 = 0,"; 
				$sql .= " tag_status = 0, ";
				
				if ($r_is_updated == 1){
					$sql .= " is_updated = 0,";
				}
				
				$sql .= " tag_acceptance_date = NULL, ";
				$sql .= " modified_date = '" . $today . "' ";
				$sql .= " WHERE friend_id = " . $r_friend_id;				
				
				//echo $sql;
				
				mysql_query($sql);
				
				if ($s_tag_status == 1 && $r_tag_status == 1){ // verify that the sender also have accepted tag request.
					$completed_requests = -1; //Decrease by one
					
					//Update Sender's profile
					$sql = " UPDATE fb_user SET ";
					$sql .= " completed_requests = completed_requests - 1, ";
					$sql .= " modified_date = '" . $today . "' ";
					$sql .= " WHERE user_id = " . $to_user_id; 
		
					//echo $sql;
					
					mysql_query($sql);
				}
				
			}
			
			//find out maximum tag accepted
			$sql = " SELECT max_tag.tag, tag.name, max(cntr) as mcntr FROM ( ";
			$sql .= " 	SELECT tag, ifnull(sum(cnt),0) as cntr FROM ( ";
			$sql .= " 		SELECT tag_1 as tag , count(friend_id) as cnt ";
			$sql .= " 		FROM friend ";
			$sql .= " 		WHERE friend_user_id = " . $from_user_id;
			$sql .= " 		AND tag_status = 1 ";
			$sql .= " 		GROUP BY tag_1 ";
			$sql .= " 		UNION ";
			$sql .= " 		SELECT tag_2 as tag , count(friend_id) as cnt ";
			$sql .= " 		FROM friend ";
			$sql .= " 		WHERE friend_user_id = " . $from_user_id;
			$sql .= " 		AND tag_status = 1 ";
			$sql .= " 		GROUP BY tag_2 ";
			$sql .= " 		) as tagging ";
			$sql .= " 	GROUP BY tag ";
			$sql .= " 	) as max_tag ";
			$sql .= " JOIN tag ON (tag.tag_id = max_tag.tag) ";
			$sql .= " GROUP BY tag.name ";
			
			//echo $sql;
			
			$rs=mysql_query($sql);
			
			if (mysql_num_rows($rs)>0){ 
			
				$row = mysql_fetch_assoc($rs);
				
				$tag_1 = $row["tag"];
				
				$row = mysql_fetch_assoc($rs);
				
				$tag_2 = $row["tag"];
				
				$sql = "SELECT tag_id, name from tag WHERE tag_id in (" . $tag_1 . "," . $tag_2 .")";
				$rs=mysql_query($sql);
				$row = mysql_fetch_assoc($rs);				
				$tag_1 = $row["tag_id"];
				$response->tag_1_name = utf8_encode($row["name"]);
				$row = mysql_fetch_assoc($rs);
				$tag_2 = $row["tag_id"];
				$response->tag_2_name = utf8_encode($row["name"]);
			}else{
				$tag_1 = 0;
				$tag_2 = 0;
			}
			
			$response->tag_1 = $tag_1;
			$response->tag_2 = $tag_2;
						
			$sql = "SELECT count(friend_id) as cnt FROM friend ";
			$sql .= " WHERE friend_user_id = " . $from_user_id ;
			$sql .= " AND tag_1 <> 0 ";
			$sql .= " AND tag_status = 0";
			
			$rs = mysql_query($sql);
			
			if(mysql_num_rows($rs) > 0){
				$row = mysql_fetch_assoc($rs);
				$badge = $row['cnt'];
			}else{
				$badge = 0;
			}
			
			//Update frien'd profile
			$sql = " UPDATE fb_user SET ";
			$sql .= " tag_1 = " . $tag_1 . ",";
			$sql .= " tag_2 = " . $tag_2 . ",";
			$sql .= " badge = " . $badge . ",";
			$sql .= " completed_requests = completed_requests + (". $completed_requests . "), ";
			$sql .= " modified_date = '" . $today . "' ";
			$sql .= " WHERE user_id = " . $from_user_id; 

			//echo $sql;
			
			mysql_query($sql);
			
			
			$sql = "SELECT tag_id, name from tag WHERE tag_id in (" . $r_tag_1 . "," . $r_tag_2 .")";
			$rs=mysql_query($sql);
			
			if (mysql_num_rows($rs)>0){ 
				$row = mysql_fetch_assoc($rs);				
				$response->tag_3 = $row["tag_id"];
				$response->tag_3_name = utf8_encode($row["name"]);
				$row = mysql_fetch_assoc($rs);
				$response->tag_4 = $row["tag_id"];
				$response->tag_4_name = utf8_encode($row["name"]);
			}else{
				$response->tag_3 = 0;
				$response->tag_4 = 0;
			}			
			
			$sql = "SELECT completed_requests ";
			$sql .= " FROM fb_user ";
			$sql .= " WHERE user_id = " . $from_user_id; 
			
			$rs=mysql_query($sql);
			
			$row = mysql_fetch_assoc($rs);	
			
			$response->completed_requests_1 = $row["completed_requests"]; 
			
			$sql = "SELECT completed_requests ";
			$sql .= " FROM fb_user ";
			$sql .= " WHERE user_id = " . $to_user_id; 
			
			$rs=mysql_query($sql);
			
			$row = mysql_fetch_assoc($rs);	
			
			$response->completed_requests_2 = $row["completed_requests"]; 
			
			
		}else{
			
			$response= new Response(0,"Access denied, invalid friend reference");
		}		
	}else{
		
		$response= new response(0,"Access denied, invalid user reference");
			
	}
	   
	closeDBCon($conn);
	   
	echo json_encode($response);
	   
	   
class Response{
	public $code;
	public $message;
	public $tag_1;
	public $tag_2;
	public $tag_1_name;
	public $tag_2_name;
	public $tag_3;
	public $tag_4;
	public $tag_3_name;
	public $tag_4_name;
	public $completed_requests_1;
	public $completed_requests_2;

	public function __construct($iCode, $iMessage ){
		$this->code = $iCode;
		$this->message = array();
		$this->message[] = $iMessage;
	}
}

?>