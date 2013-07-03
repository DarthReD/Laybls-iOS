<?php include('../includes/dbconnect.php'); ?>
<?php

$file = fopen("fb_sync.txt","a+");

$data = file_get_contents("php://input");

//$data = $_POST['data'];

fwrite($file,$data);

$json = json_decode($data);

$entry = $json->{'entry'};
$uid = $entry[0]->{'uid'};
$time = $entry[0]->{'time'};
$changed_fields = $entry[0]->{'changed_fields'};
$field = $changed_fields[0];

$today = gmdate('Y-m-d H:i:s', time());

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

//open databse connection
$conn = openDBCon();

if ($field == "friends"){
	$url = 'https://graph.facebook.com/'
	    . 'fql?q=SELECT+uid_from,uid_to,time+FROM+friend_request+where+uid_from=' . $uid .'+'
		. 'and+time=' . $time
    	. '&access_token=' . $fb_token;
		
	//echo $url;
		
	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,$url);
	curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,60);
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
	$buffer = rec_utf8_encode(curl_exec($curl_handle));
	
	curl_close($curl_handle);
	
	fwrite($file,"\n".$buffer);
	
	//echo $buffer;

}else{
	$url = 'https://graph.facebook.com/' . $uid . '/?fields=id,name,picture.width(120).height(120)&access_token='.$fb_token;
	
	//echo $url;
		
	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,$url);
	curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,60);
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,true);
	$buffer = curl_exec($curl_handle);
	
	curl_close($curl_handle);
	
	fwrite($file,"\n".$buffer);
	
	//echo $buffer;
	
	$jobj = json_decode($buffer);
	
	$sql = "UPDATE fb_user SET ";
	$sql .= " name = '" . $jobj->{'name'} . "'," ;
	$sql .= " profile_picture = '" .  $jobj->{'picture'}->{'data'}->{'url'} . "',";
	$sql .= " modified_date = '" . $today . "' ";
	$sql .= " WHERE fb_user_id = " . $uid;
	
	//echo $sql;
					
	mysql_query($sql);	
}



closeDBCon($conn);

fwrite($file,"\n\n\n");
fclose($file);

echo $_GET['hub_challenge'];

?>
