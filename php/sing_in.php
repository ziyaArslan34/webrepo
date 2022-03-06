<?php
	function find_username_password($userInfo, $userpass) {
		foreach($userInfo as $i) {
			if($i == $userpass)
				return 1;
		}

		return 0;
	}

	$username = $_POST['username'];
	$password = $_POST['password'];

	$rfile = fopen("users.txt", "r");

	while(!feof($rfile)) {
		$line = fgets($rfile);

		if(find_username_password(explode("#", $line), $username)) {
			if(find_username_password(explode("#",$line), $password)) {
				echo "Giris basarili.<br>";
				break;
			} else {
				echo "Sifre yanlis!..<br>";
			}
		} else {
			echo "Kullanici bulunamadi!..<br>";
		}
	}
	fclose($rfile);
?>
