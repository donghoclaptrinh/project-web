<?php
	// Check xem người dùng đã đăng nhập hay chưa
	// Nếu chưa đăng nhập thì chuyển người dùng về trang login.php
	session_start();
	if (!isset($_SESSION["logged"]) || !$_SESSION["logged"]) {
		header('Location: login.php');
		die();
	}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Website K8</title>
		<link rel="stylesheet" href="index10.css">

		<style>
		
		
		</style>
	</head>
	<body>
		<div class="menu">
			<ul>
			  <li><a href="#">Chishiki</a></li>
			  <li class="user"><a href="#">Admin</a>
					<ul class="sub-menu">
						<li><a href="logout.php">Đăng xuất</a></li>
					</ul>
					
			  </li>
			</ul>
		</div>
		
		<div class="content">
			<?php 
				// if tiếng nhật
				// echo->>>
				echo "Welcome Webcafe24h.com"; 
			?>
		</div>
		
		<center>
		<div> 		
			<a style="color:red; font-size:36px; " href="http://webcafe24h.com/"> Thu lấy tinh hoa thời trí tuệ - Mở ra đường lớn tới tương lai !  </a>
		</div>
		</center>
		<div style="width: 100%; height: 100%;" > 
		
			<iframe 
			style="width: 100%;height: 100%;" 
			src="http://webcafe24h.com/" title="   "
			></iframe>	
		</div>
	
		<div class="footer">Copyright © 2022 Webcafe24h.com All rights reserved</div>
	</body>
</html>
