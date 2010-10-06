<?php
$file = '../txt/'.$_REQUEST['id'].'.txt';
if (file_exists($file)) {
	readfile($file);
} else {
	echo "404";
}
?>