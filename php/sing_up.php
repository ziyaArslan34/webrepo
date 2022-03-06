<?php

	$wfile = fopen("users.txt", "a+");

	fwrite($wfile, $_POST['username']."#".$_POST['password']."#".$_POST['email']."\n");
	fclose($wfile);

	echo "tmmdir kaydoldun ama sayfada suan bi bok yok :D<br>";
?>
