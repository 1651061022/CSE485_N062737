<div class="container">
	<div class="row">
		<header>
			<div class="col-xs-12 col-md-3">
				<div class="row">
					<div class="logo">		
						<a href="main.php">
							<img src="image/logo.png">
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-8 col-md-6">
				<div class="ro">	
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
			<div class="col-xs-4 col-md-3">
				<div class="form_logn">
					<div class="col-lg-6">
					<!-- <div class="loginbtn">
						<div class="button">
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
								Đăng Nhập / login </button>
						</div>
					</div> -->
					<div class="style2">
						<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button>
						<div id="id01" class="modal">
							<form class="modal-content animate" action="" method="post">
								<div class="container conta" >
									<div class="row">
										<div class="cot1 col-md-4">           
											<div class="col-md-12">
												<div class="Name">
													<label for="fristname"><b>First name: </b></label>
													<input type="text" placeholder="Enter first name" name="fristname" required>
													<label for="lastname"><b>Last name: </b></label>
													<input type="text" placeholder="Enter last name" name="lastname" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="Contact Info">
													<label for="mail"><b>Email: </b></label>
													<input type="text" placeholder="E-mail@..." name="email" required>
													<label for="phone"><b>Phone Number: </b></label>
													<input type="text" placeholder="PhoneNumber..." name="phone" required>
												</div>
											</div>
											<div class='col-md-12'>
												<label for="username"><b>BirthDay: </b></label>
												<div class="form-group">
													<div class='input-group date' id='datetimepicker'>
														<input type='text' class="form-control" placeholder="BirthDay" name="birthday" data-format="YYYY/MM/DD"/>
														<span class="input-group-addon">
															<span class="glyphicon glyphicon-time"></span>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="cot2 col-md-4">
											<div class="col-md-12">
												<div class="Login Info">
													<label for="username"><b>Username: </b></label>
													<p><p><input type="text" placeholder="Enter Username" name="username" required></p></p>
													<label for="password"><b>Password: </b></label>
													<p><input type="password" placeholder="Enter Password" name="password" required></p>
													<label for="password"><b>Repeat Password: </b></label>
													<p><input type="password" placeholder="Enter Password" name="re_password" required></p>
												</div>
											</div>
										</div>
										<div class="cot3 col-md-4">           
											<div class="col-md-11">
												<img src="image/avatar.png" alt="Avatar" class="avatar">
											</div>
											<div class="col-md-1">
												<div class="imgcontainer">
													<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<button type="submit">Register</button>
										</div>
									</div>
								</div>
								<div class="container conta" style="background-color:#f1f1f1">
									<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="style2">
						<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>

						<div id="id02" class="modal">
							<form class="modal-content animate" action="/action_page.php" method="GET">
								<div class="container conta">

									<div class="col-md-9">
										<label for="uname"><b>Username</b></label>
										<input type="text" placeholder="Enter Username" name="uname" required>

										<label for="psw"><b>Password</b></label>
										<input type="password" placeholder="Enter Password" name="psw" required>
									</div>
									<div class="col-md-3">
										<div class="imgcontainer">
											<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
											<img src="image/avatar.png" alt="Avatar" class="avatar">
										</div>
									</div>

									<button type="submit">Login</button>
									<label>
										<input type="checkbox" checked="checked" name="remember"> Remember me
									</label>
								</div>
								<div class="container conta" style="background-color:#f1f1f1">
									<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
									<span class="psw">Forgot <a href="#">password?</a></span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-12 ">
			<div class="row">
				<div class="dropdown-navbar">
					<button onclick="myFunction()"  class="dropbtn">Menu
					</button>
					<div id="myDropdown" class="dropdown-content">
						<a href="3_main.php">Trang Chủ</a>
						<a href="next1.php">Du Lịch</a>
						<a href="next1.php">Khách Sạn</a>
						<a href="next1.php">Ăn Uống</a>
						<a href="index.php">Tin Tức</a>
						<a href="index.php">CSKH</a>
						<a href="index.php">Liên Hệ</a>
					</div>
				</div>
				<div class="topnav">
					<a href="3_main.php">Trang Chủ</a>
					<a href="next1.php">Du Lịch</a>
					<a href="next1.php">Khách Sạn</a>
					<a href="next1.php">Ăn Uống</a>
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
			<a href="next1.php" id="menu">Menu
				<i class="fas fa-archive"></i>
			</a>
			<a href="next1.php" id="about">Cá nhân
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			</a>
			<a href="next1.php" id="blog">Tourcủa bạn
				<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
			</a>
			<a href="#" id="projects">Tài khoản
				<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
			</a>
			<a href="#" id="contact">Contact
				<span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
			</a>
		</div>
	</div>
</div>