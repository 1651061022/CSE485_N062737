<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>H&M-Travel</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container-fluid  bggd">
		<div class="row">
			<div class="container">
				<div class="row">
					<header>
						<div class="col-md-3">
							<div class="row">
								<div class="logo">		
									<a href="index.php">
										<img src="image/logo.png">
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">	
								<div class="search-container">
									<form action="/action_page.php">
										<input type="text" placeholder="Search.." name="search">
										<button type="button" class="btn btn-default btn-lg">
											<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
										</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="row">
								<div class="loginbtn">
									<div class="button">
										<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
											Đăng Nhập / login
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="dropdown-navbar">
									<button onclick="myFunction()"  class="dropbtn">Menu
									</button>
									<div id="myDropdown" class="dropdown-content">
										<a href="index.php">Trang Chủ</a>
										<a href="nextn1.php">Du Lịch</a>
										<a href="index.php">Khách Sạn</a>
										<a href="index.php">Ăn Uống</a>
										<a href="index.php">Tin Tức</a>
										<a href="index.php">CSKH</a>
										<a href="index.php">Liên Hệ</a>
									</div>
								</div>
								<div class="topnav">
									<a href="index.php">Trang Chủ</a>
									<a href="nextn1.php">Du Lịch</a>
									<a href="index.php">Khách Sạn</a>
									<a href="index.php">Ăn Uống</a>
									<a href="index.php">Tin Tức</a>
									<a href="index.php">CSKH</a>
									<a href="index.php">Liên Hệ</a>
								</div>
							</div>
						</div>
					</header>
					<div class="col-md-12">
						<div class="row">
							<div class="slideshow-container">
								<div class="mySlides fade">
									<div class="numbertext"></div>
									<img src="image/slideshow/1.jpg" >
									<div class="text">1</div>
								</div>
								<div class="mySlides fade">
									<div class="numbertext"></div>
									<img src="image/slideshow/2.jpg" >
									<div class="text">2</div>
								</div>
								<div class="mySlides fade">
									<div class="numbertext"></div>
									<img src="image/slideshow/3.jpg" >
									<div class="text">3</div>
								</div>
								<div class="mySlides fade">
									<div class="numbertext"></div>
									<img src="image/slideshow/4.jpg" >
									<div class="text">4</div>
								</div>
								<div class="mySlides fade">
									<div class="numbertext"></div>
									<img src="image/slideshow/5.jpg" >
									<div class="text">5</div>
								</div>
								<div style="text-align:center;margin: 12px">
									<span class="dot"></span> 
									<span class="dot"></span>
									<span class="dot"></span> 
									<span class="dot"></span> 
									<span class="dot"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="Left-Content">
				<div class="Sidenav-left">
					<div id="mySidenav" class="sidenav">
						<a href="#" id="menu">Menu
							<span class="glyphicon glyphicon-list" aria-hidden="true"></span>
						</a>
						<a href="#" id="about">About
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						</a>
						<a href="#" id="blog">Blog
							<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
						</a>
						<a href="#" id="projects">Projects
							<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
						</a>
						<a href="#" id="contact">Contact
							<span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>