<?php

$file = $_REQUEST['id'];
$data = $_REQUEST['value'];

$fp = fopen('../txt/'.$file.".txt","w");

if(!$fp) {
    echo 'Error: Cannot open file.';
    exit;
}

fwrite($fp, $data);
fclose($fp);

//show the indicator for "saving" effect
sleep(1);

print $_REQUEST['value'];
?>