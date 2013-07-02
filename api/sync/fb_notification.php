<?php

$data = file_get_contents("php://input");
$json = json_decode($data);

echo $_GET['hub_challenge'];

$file = fopen("fb_sync.txt","a+");

fwrite($file,$data);

fclose($file);

?>
