<?php

function randomString($len) {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $len; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function rec_utf8_encode($inputstring){
	
	$cleanstring = $inputstring;
	if (is_array($cleanstring)){
		foreach($cleanstring as $k => $v){
			$cleanstring[$k] = rec_utf8_encode($v);
		}
	}else{
		$cleanstring = utf8_encode($cleanstring);
	}
	return $cleanstring;
}

function send_apns_notification_on_tagging($from_user_id, $to_user_id, $tag_1, $tag_2, $today){

	ini_set('display_errors', 'Off');
	ini_set('display_startup_errors', 'Off');
	error_reporting(0);

	// TODO: Put your private key's passphrase here:
	$passphrase = '123456789';
	$cert = 'ck.pem';

//	$passphrase = 'Sample@1235';
//	$cert = 'ckdev.pem';
	
	//Get Push ID
	$sql = " SELECT pushid ";
	$sql .= " FROM fb_user ";
	$sql .= " WHERE user_id = " . $to_user_id;
	$sql .= " AND pushid IS NOT null ";
	$sql .= " AND pushid != ''";
	
	//echo $sql;
	
	$rs = mysql_query($sql);
		
	if (mysql_num_rows($rs) > 0){
	
		$row = mysql_fetch_array($rs);
		$pushid = $row['pushid'];
		
		//echo $pushid;
	
		//Get From User Information
		$sql = " SELECT fb_user.name ";
		$sql .= " FROM fb_user ";
		$sql .= " WHERE user_id = " . $from_user_id;
		
		$rs = mysql_query($sql);
		
		$row = mysql_fetch_array($rs);
		$name = utf8_encode($row['name']);

		//get friend id
		$sql = " SELECT friend.friend_id, (fb_user.badge+1) as badge ";
		$sql .= " FROM friend " ;
		$sql .= " JOIN fb_user ON (friend.my_user_id = fb_user.user_id) ";
		$sql .= " WHERE friend.my_user_id = " . $to_user_id;
		$sql .= " AND friend.friend_user_id = " . $from_user_id;
		
		//echo $sql;
		
		$rs = mysql_query($sql);
		
		if (mysql_num_rows($rs) > 0){
			$row = mysql_fetch_array($rs);
			$friend_id = $row['friend_id'];
			$badge = intval($row['badge']);	

			//Select Tag Name
			$sql = " SELECT tag.name ";
			$sql .= " FROM tag ";
			$sql .= " WHERE tag_id = " . $tag_1 . " OR tag_id = ". $tag_2;
			
			//echo $sql;
			
			$rs = mysql_query($sql);
			
			//first tag
			$row = mysql_fetch_array($rs);
			$tag_1_name = utf8_encode($row['name']);
			
			//second tag
			$row = mysql_fetch_array($rs);
			$tag_2_name = utf8_encode($row['name']);
					
			// Message to be sent
			$message = "Ny anmodning " . $name;
		
			$ctx = stream_context_create();	
			
			stream_context_set_option($ctx, 'ssl', 'local_cert', $cert);
			stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

			// Open a connection to the APNS server
			$fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx); 
			
			if (!$fp) {
				//echo "fail to connect " . $err;die;
				//exit("Failed to connect: $err $errstr" . PHP_EOL);
			}else{
				//echo 'Connected to APNS';	

				// Create the payload body
				$body['aps'] = array(
						'alert' => array('body' => $message, 'action-loc-key' => 'View'),
						'sound' => 'default',
						'badge' =>  $badge
					);
				
				$body['action'] = "tag_friend";					
				$body['friend_id'] = $friend_id;
				$body['tag_1'] = $tag_1;
				$body['tag_2'] = $tag_2;
				$body['tag_status'] = 0;
				$body['created_date'] = $today;
				
				
				//print_r($body);
				
				// Encode the payload as JSON
				$payload = json_encode($body);				

				$token = $pushid;
				$token = str_replace(" ", "", $token);
				//echo $token . "<BR>";				
				
				$msg = chr(0); 
				$msg .= pack('n', 32) ;
				$msg .= pack('H*', $token) ;
				$msg .= pack('n', strlen($payload)) ;
				$msg .=  $payload;
							
				// Send it to the server
				$result = fwrite($fp, $msg, strlen($msg));

				// Close the connection to the server
				fclose($fp);
				
				$sql = "SELECT count(friend_id) as cnt FROM friend ";
				$sql .= " WHERE friend_user_id = " . $to_user_id ;
				$sql .= " AND tag_1 <> 0 ";
				$sql .= " AND tag_status = 0";
				
				mysql_query($sql);
				
				if(mysql_num_rows($rs) > 0){
					$row = mysql_fetch_assoc($rs);
					$badge = $row['cnt'];
				}else{
					$badge = 0;
				}
				
				//Increase badge value
				$sql = "UPDATE fb_user SET ";
				$sql .= " badge = " . $badge . ",";
				$sql .= " WHERE user_id = " . $to_user_id;
				
				//echo $sql;
				
				mysql_query($sql);
			}	
		}
	}
	
	return;
}

function send_apns_notification_on_remove_tag($from_user_id, $to_user_id, $today){

	ini_set('display_errors', 'Off');
	ini_set('display_startup_errors', 'Off');
	error_reporting(0);

	// TODO: Put your private key's passphrase here:
	$passphrase = '123456789';
	$cert = 'ck.pem';

//	$passphrase = 'Sample@1235';
//	$cert = 'ckdev.pem';
	
	//Get Push ID
	$sql = " SELECT pushid ";
	$sql .= " FROM fb_user ";
	$sql .= " WHERE user_id = " . $to_user_id;
	$sql .= " AND pushid IS NOT null ";
	$sql .= " AND pushid != ''";
	
	//echo $sql;
	
	$rs = mysql_query($sql);
		
	if (mysql_num_rows($rs) > 0){
	
		$row = mysql_fetch_array($rs);
		$pushid = $row['pushid'];
		
		//echo $pushid;
	
		//Get From User Information
		$sql = " SELECT fb_user.name ";
		$sql .= " FROM fb_user ";
		$sql .= " WHERE user_id = " . $from_user_id;
		
		$rs = mysql_query($sql);
		
		$row = mysql_fetch_array($rs);
		$name = $row['name'];

		//get friend id
		$sql = " SELECT friend.friend_id ";
		$sql .= " FROM friend " ;
		$sql .= " WHERE friend.my_user_id = " . $to_user_id;
		$sql .= " AND friend.friend_user_id = " . $from_user_id;
		
		//echo $sql;
		
		$rs = mysql_query($sql);
		
		if (mysql_num_rows($rs) > 0){
			$row = mysql_fetch_array($rs);
			$friend_id = $row['friend_id'];

			//Select Tag Name
			$sql = " SELECT tag_1, tag_2 ";
			$sql .= " FROM fb_user ";
			$sql .= " WHERE user_id  = " . $from_user_id;
			
			//echo $sql;
			
			$rs = mysql_query($sql);
			
			//first tag
			$row = mysql_fetch_array($rs);
			$tag_1 = $row['tag_1'];
			$tag_2 = $row['tag_2'];
			
			//Select Tag Name
			$sql = " SELECT tag_1, tag_2 ";
			$sql .= " FROM fb_user ";
			$sql .= " WHERE user_id  = " . $to_user_id;
			
			//echo $sql;
			
			$rs = mysql_query($sql);
			
			//first tag
			$row = mysql_fetch_array($rs);
			$my_tag_1 = $row['tag_1'];
			$my_tag_2 = $row['tag_2'];
								
			// Message to be sent
			$message = $name . " lide dit ord";
		
			$ctx = stream_context_create();	
			
			stream_context_set_option($ctx, 'ssl', 'local_cert', $cert);
			stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

			// Open a connection to the APNS server
			$fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx); 
			
			if (!$fp) {
				//echo "fail to connect " . $err;die;
				//exit("Failed to connect: $err $errstr" . PHP_EOL);
			}else{
				//echo 'Connected to APNS';	

				// Create the payload body
				$body['aps'] = array(
						'alert' => array('body' => $message, 'action-loc-key' => 'View'),
						'sound' => 'default'
					);
				
				$body['action'] = "tag_removed";					
				$body['friend_id'] = $friend_id;
				$body['tag_1'] = $tag_1;
				$body['tag_2'] = $tag_2;
				$body['my_tag_1'] = $my_tag_1;
				$body['my_tag_2'] = $my_tag_2;				
				
				//print_r($body);
				
				// Encode the payload as JSON
				$payload = json_encode($body);				

				$token = $pushid;
				$token = str_replace(" ", "", $token);
				//echo $token . "<BR>";				
				
				$msg = chr(0); 
				$msg .= pack('n', 32) ;
				$msg .= pack('H*', $token) ;
				$msg .= pack('n', strlen($payload)) ;
				$msg .=  $payload;
							
				// Send it to the server
				$result = fwrite($fp, $msg, strlen($msg));

				// Close the connection to the server
				fclose($fp);				
			}	
		}
	}
	
	return;
}


?>
