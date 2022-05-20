<?php
	
	if (isset($_POST['login'])) { 
		$username = $_POST['username'];
		$password = $_POST['password'];		
		$dbHost = "localhost";
		$dbUser = "donghoclaptrinh";
		$dbPass = "@nguyen2022";
		$dbName = "donghoclaptrinh";
		$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

		
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
		$result = $conn->query($sql);
		$totalUser = $result->num_rows;
		if ($totalUser > 0) {
		
			session_start();
			$_SESSION["logged"] = true;			
		    header('Location: index10.php');
		    die();
		} else {
		    echo "Tài khoản hoặc mật khẩu của bạn không đúng.";
		}
	} else {
	}	

?>


<!DOCTYPE html>
<html>
	<head>
		<title>DangNhap</title>
		<link rel="stylesheet" href="login.css">
	</head>
	
	<body>
		<div class="login">
		
			<form action="" method="POST">
				<h1> Đăng nhập hệ thống </h1>
				<br>
				<input type="text" name="username" placeholder="Tài khoản">
				<br>
				<input type="password" name="password" placeholder="Mật khẩu">			
			    <br>
				<input class="input-submit" type="submit" name="login" value="Đăng nhập">			
			    <br>		
				
				<div class="check">
				<input type="checkbox">
					Ghi nhớ đăng nhập					
			    </div>			
				<a href="#">Quên mật khẩu? </a>			
			</form>
		</div>
		
		
			<center>			
				<div><a href="homepage.php">Top pageへ戻る</a></div>
			</center>
		
		<div class="footer">© 2022 donghoclaptrinh.com All rights reserved</div>		
	</body>
	
</html>

