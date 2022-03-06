<?php
	function find_username_password($userInfo, $userpass) {
		for($i=0;$i < count($userInfo);$i++) {
			if($userpass == $userInfo[i]) {
				return 1;
			}
		}
		return 0;
	}

	$username = $_POST['username'];
	$password = $_POST['password'];

	$rfile = fopen("users.txt", "r");

	while(!feof($rfile)) {
		$line = fgets($rfile);
		$userInfo = explode("#", $line);

		if(find_username_password($userInfo, $username)) {
			if(find_username_password($userInfo, $password)) {
				echo "Giris basarili.<br>";
			} else {
				echo "Sifre yanlis!..<br>";
			}
		} else {
			echo "Kullanici bulunamadi!..<br>";
		}
	}
	fclose($rfile);
?>
