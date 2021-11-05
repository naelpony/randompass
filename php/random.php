<?php

if($_POST["SEND"]){  
	$length = (int)$_POST["SIZE"];
	if($length < 5 || $length > 25){
		$message = "Введите число больше 5 и меньше 25";
		echo "<script type='text/javascript'>
		alert('$message');
		history.back(-1);
		</script>";
	}else{
		function generatePassword ($length)
		{
			$genpassword = "";
			$possible = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$i = 0;
			while ($i < $length) {
				$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
				if (!strstr($genpassword, $char)) {
					$genpassword .= $char;
					$i++;
				}
			}
			return $genpassword;
		}
	}
	generatePassword($length);	
  $pass = generatePassword($length);
}
if(isset($_POST["RESET"])){
	unset($pass);
	unset($length);
	header('Location: index.php');
  exit();
}
?>
