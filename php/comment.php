<?php
	$wfile = fopen("comments.txt", "a+");

	fwrite($wfile, $_POST['username']." -> ".$_POST['comment']."\n");
	fclose($wfile);

	echo "yorum gonderildi.<br>";
?>
