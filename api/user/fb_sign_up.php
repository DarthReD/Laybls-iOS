<?php include('../includes/dbconnect.php'); ?>
<?php include('../includes/lib.php'); ?>
<?php
	header('Content-type: application/json');
	
	//start the output buffer
	ob_start();

	$start_t = gmdate('Y-m-d H:i:s', time());
		
	//read json from request
	$data = json_decode($_POST['data']);
	
	$ele=0;
	
	if (VERSION <> $data->{'version'})
	{
		$response = new Response(0,"Access denied");
	}
	else	
	{
	
		$response = new Response(1,"Success");
		
		$response->start_t = $start_t;
		
		
		// Create our Application instance (replace this with your appId and secret).
		$config = array();
		$config['appId'] = '521639034535212';
		$config['secret'] = 'fb377c54a63bcf4c03643962c0d88d85';
		
		
		/*
		$config = array();
		$config['appId'] = '198477263638959';
		$config['secret'] = 'dd41e12241c8adacd050e258580e34d9';
		*/
		
		
		$token_url = "https://graph.facebook.com/oauth/access_token?" .
			"client_id=" . $config['appId'] .
			"&client_secret=" . $config['secret'] .
			"&grant_type=client_credentials";
		
		$fb_token = str_replace('access_token=', '', file_get_contents($token_url));		
		
		$fb_user_id = number_format($data->{'fb_user_id'},0,'','');
		
		//$fb_token = $data->{'access_token'};
				
		$url = 'https://graph.facebook.com/' . $fb_user_id . '/?fields=id,name,picture.width(120).height(120),friends.fields(id,name,picture.width(120).height(120))&access_token='.$fb_token;
		
		//echo $url;
		
		$curl_handle=curl_init();
		curl_setopt($curl_handle,CURLOPT_URL,$url);
		curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,60);
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
		$buffer = rec_utf8_encode(curl_exec($curl_handle));
		
		//echo $buffer;
		
		curl_close($curl_handle);
		
		$jobj = json_decode($buffer);

		//get your data
		$response->name = $jobj->{'name'};
		$response->profile_picture = $jobj->{'picture'}->{'data'}->{'url'};
		$platform = $data->{'platform'};
		$udid = $data->{'udid'};
		$pushid = $data->{'pushid'};
		
	
		//open databse connection
		$conn = openDBCon();

				
		$sql = "UPDATE fb_user SET ";
		$sql .= " pushid = null ";			
		$sql .= " WHERE pushid = '" . $data->{'pushid'} . "' ";
		
		//echo $sql;
			
		mysql_query($sql);		
		
		//get Access Key
		$response->access_key = randomString(20);
		
		//get current time
		$response->last_updates = $today = gmdate('Y-m-d H:i:s', time());		

		//verify user existance
		$sql = "SELECT user_id FROM fb_user ";
		$sql .= " WHERE fb_user_id = " . $fb_user_id ;
	
		//echo $sql;
		
		$rs = mysql_query($sql);
				
		
		if (mysql_num_rows($rs) > 0)
		{
			$row = mysql_fetch_assoc($rs);
			
			$response->user_id = $row['user_id'];
			
			$sql = "UPDATE fb_user SET ";
			$sql .= "name = '" . $response->name . "',";
			$sql .= "profile_picture = '" . $response->profile_picture . "',";
			$sql .= "is_registered = 1,access_key = '" . $response->access_key . "',";		
			$sql .= "platform = " . $platform . ",";
			$sql .= "udid = '" . $udid . "',";
			$sql .= "pushid = '" . $pushid . "',"; 
			$sql .= "modified_date = '" . $today . "'"; 
			$sql .= " WHERE user_id = " . $response->user_id;
			
			mysql_query($sql);
			
		}else{
			$sql = "insert into fb_user ";
			$sql .= " (fb_user_id, name, ";
			$sql .= " profile_picture, is_registered, sessions, access_key, ";
			$sql .= " platform, udid, pushid, created_date, modified_date) values ( ";
			$sql .=	$fb_user_id . ",";
			$sql .= "'" . $response->name . "',";
			$sql .= "'" . $response->profile_picture . "',1,";
			$sql .= "1,'" . $response->access_key . "',";		
			$sql .= $platform . ",";
			$sql .= "'" . $udid . "',";
			$sql .= "'" . $pushid . "',";
			$sql .= "'" . $today . "',";			
			$sql .= "'" . $today . "')";
			
			//echo $sql;
					
			mysql_query($sql);
					
			$response->user_id = mysql_insert_id();	
		}
		
		
		///////////////////////////retrieve TAGs ////////////////////////////
		$sql = "SELECT tag_id, name FROM tag";
		
		//echo $sql;
			
		$rs = mysql_query($sql);
		
		while($row = mysql_fetch_assoc($rs)) 
		{			
			$response->tags[] = $row; //rec_utf8_encode($row); //Tag
		}
		
		
		//////////// Tag Requests////////////////////////////
		$sql = "SELECT ";
		$sql .= " friend.friend_id, friend.friend_user_id, fb_user.name, fb_user.fb_user_id,";
		$sql .= " fb_user.profile_picture, fb_user.is_registered, fb_user.completed_requests, ";
		$sql .= " fb_user.tag_1 as friend_tag_1, fb_user.tag_2 as friend_tag_2, friend1.created_date,";
		$sql .= " friend1.tag_1, friend1.tag_2 ";
		$sql .= " FROM friend ";
		$sql .= " JOIN fb_user ON (friend.friend_user_id = fb_user.user_id) ";
		$sql .= " JOIN friend as friend1 ON (friend.my_user_id = friend1.friend_user_id AND ";
		$sql .= " friend.friend_user_id = friend1.my_user_id) ";
		$sql .= " WHERE friend.my_user_id = " . $response->user_id ;
		$sql .= " AND friend.friend_user_id IN (";		
		$sql .= " SELECT friend.my_user_id FROM friend WHERE friend_user_id = " . $response->user_id;
		$sql .= " AND tag_1 <> 0 )"; 
		
		//echo $sql;
		
		$rs = mysql_query($sql);
			
		while($row = mysql_fetch_assoc($rs)) 
		{
			$response->tag_received[] = $row; //Tag
		}
		
		///////////////////proces friends
		//================================
		$friends = $jobj->{'friends'}->{'data'};
		
		for ($ele=0; $ele < count($friends); $ele++)
		{
			$friend_fb_user_id = number_format($friends[$ele]->{'id'},0,'','');
			$name = str_replace("'", "''",$friends[$ele]->{'name'});
			$profile_picture = $friends[$ele]->{'picture'}->{'data'}->{'url'};
			
			//Verify whether friend is registered or not
			$sql = "SELECT user_id, is_registered, ";
			$sql .= " tag_1, tag_2, completed_requests "; 
			$sql .= " FROM fb_user WHERE fb_user_id = " . $friend_fb_user_id ;
			
			//echo $sql;
		
			$rs = mysql_query($sql);
			
			//consider friend is not added yet
			$friend_id = 0;
	
			if (mysql_num_rows($rs) > 0) //reference to this friend is already added in fb_user
			{
				$row = mysql_fetch_assoc($rs);
				
				$friend_user_id = $row['user_id'];
				$tag_1 = $row['tag_1'];
				$tag_2 = $row['tag_2'];
				$is_registered = $row['is_registered'];
				$completed_requests = $row['completed_requests'];
				
				$sql = "SELECT friend.friend_id FROM friend ";
				$sql .= " WHERE ";
				$sql .= " friend.my_user_id = " . $response->user_id;
				$sql .= " AND friend.friend_user_id = " . $friend_user_id;
				
				$rs = mysql_query($sql);
	
				if (mysql_num_rows($rs) > 0) //reference to this friend is already added in fb_user
				{
					$row = mysql_fetch_assoc($rs);
					
					$friend_id = $row["friend_id"];
				}
			}
			else //friend reference is not added in fb_user table
			{
				//add friend reference
				$sql = "insert into fb_user ";
				$sql .= " (fb_user_id, name, ";
				$sql .= " profile_picture, is_registered,  ";
				$sql .= " created_date, modified_date) values ( ";
				$sql .=	$friend_fb_user_id . ",";
				$sql .= "'" . $name . "',";
				$sql .= "'" . $profile_picture . "',";
				$sql .= "0,'" . $today . "','" . $today . "')";
				
				//echo $sql;
						
				mysql_query($sql);
						
				$friend_user_id = mysql_insert_id();
				$tag_1 = 0;
				$tag_2 = 0;
				$completed_requests = 0;
				$is_registered = 0;
			}
			
			
			if ($friend_id == 0){
				//Add Friend
				//==========
				$sql = " INSERT into friend ";
				$sql .= " (my_user_id, friend_user_id, is_synced, created_date, modified_date) values (";
				$sql .= $response->user_id . ",";
				
				if ($friend_user_id == 0)
				{
					$sql .= "null,";
				}
				else
				{
					$sql .= $friend_user_id . ",";
				}
				
				if ($ele <= (PAGE_SIZE -1)){
					$sql .= "1,";
				}else{
					$sql .= "0,";
				}
				
				$sql .= "'" . $today . "','" . $today . "')";
			
				//echo $sql;
						
				mysql_query($sql);
						
				$friend_id = mysql_insert_id();				
			}			
			
			$friend = new Friend();
		
			$friend->friend_id = $friend_id;
			$friend->uid = $friend_fb_user_id;
			$friend->name = $name;
			$friend->pic_square = $profile_picture;
			$friend->friend_user_id = $friend_user_id;
			$friend->is_registered = $is_registered;
			$friend->completed_requests = $completed_requests;
			$friend->tag_1 = $tag_1;
			$friend->tag_2 = $tag_2;
			
			$response->friends[] = $friend;

			
			if ($ele == (PAGE_SIZE - 1)){
				$response->end_t = gmdate('Y-m-d H:i:s', time());
				//send response
				echo json_encode($response);

				//tell the browser not to expect any more content and close the connection
				header("Content-Length: " . ob_get_length());
				header("Connection: close");
				ob_end_flush(); 
				ob_flush(); 
				flush(); 
			}
			
		}

		//close databse connection
		closeDBCon($conn);
	}
	
	if ($ele < (PAGE_SIZE -1)){
		//send response
		$response->end_t = gmdate('Y-m-d H:i:s', time());
		echo json_encode($response);
		ob_end_flush(); 
		ob_flush(); 
		flush(); 
	}
	
	//echo gmdate('Y-m-d H:i:s', time());
	
	
//response class definition
class Response{

	public $start_t;
	public $end_t;
	
	public $code;
	public $message;
	
	//your unique registration id
	public $user_id;
	
	//your name
	public $name;
	
	//your profile picture
	public $profile_picture;
	
	//your access_key to API
	public $access_key;
	
	public $last_updates;
	
	//list of friends
	public $friends;

	//list of friends
	public $tag_received;
	
	//list of tag master 
	public $tags;
	
	public function __construct($iCode, $iMessage ){
		$this->code = $iCode;
		$this->message = array();
		$this->message[] = $iMessage;
		$this->friends = array();		
		$this->tag_received = array();
		$this->tags = array();

	}
}

class Friend{	
	//unique identitication
	public $friend_id;
	
	public $uid;
	
	public $name;
	
	public $pic_square;
	
	//user_id of friend 
	public $friend_user_id;
	
	public $tag_1;
	public $tag_2;
	
	public $completed_requests;
	
	//whether friend is registered or not
	public $is_registered;
	
	public function __construct()
	{
	}
}	

class Tag{
	public $tag_id;
	public $name;
	
	public function __construct()
	{
	}	
}
?>