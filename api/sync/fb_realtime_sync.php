<?php

require_once '../includes/facebook.php';

$data = file_get_contents("php://input");
$json = json_decode($data);

$file = fopen("fb_sync.txt","a+");

fwrite($file,$data);

$entries = $data->{'entry'};

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '521639034535212',
  'secret' => 'fb377c54a63bcf4c03643962c0d88d85',
));

$user = $facebook->api('/100005821961723');
	
	fwrite($file,$user['name']);
	fwrite($file,$user['pic_square']);

for ($ele=0; $ele < count($entries); $ele++)
{
	// This call will always work since we are fetching public data.
	$user = $facebook->api('/' . $entries[$ele]->{'uid'});
	
	fwrite($file,$user['name']);
	fwrite($file,$user['pic_square']);
}


fclose($file);

echo $_GET['hub_challenge'];

?>
