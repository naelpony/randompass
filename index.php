<?php
	include 'php/random.php';
?> 
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Open+Sans:wght@400;600;700&family=Raleway:wght@700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Test</title>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="formce">
				<form action="" method="POST" class="form">	
					<img src="img/password.png" alt="logo">				
					<h1>Генератор паролей</h1>
					<input type="text" maxlenght="25" name="SIZE" placeholder="Введите длинну пароля">
					<h2><p>Ваш пароль</p><br>
						<?php	echo $pass; ?>
					</h2>
					<div class="btn">
						<input type="submit" name="SEND" class="btn-send" value="Отправить">
						<input type="submit" name="RESET" class="btn-reset" value="Очистить">
					</div>					
				</form>				
					
			</div>
		</div>
	</div>

</body>

</html>