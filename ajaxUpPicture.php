<?php
	$files = $_POST["imgfile"];
	$tmp = base64_decode(substr($files,22));
	$fp = dirname(__FILE__)."/images/".time().".jpg";
	file_put_contents( $fp, $tmp);
	echo "ok";
?>