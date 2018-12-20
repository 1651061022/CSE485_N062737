<div class="container">
	<div class="row">
		<header  class="bghd">
			<div class="col-xs-12 col-md-3">
				<div class="row">
					<div class="logo">		
						<a href="main.php">
							<img src="image/logo.png">
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="ro">	
					<div class="search-container">
						<form action="https://www.google.com/search" class="searchform" method="get" name="searchform" target="_blank">
							<input name="sitesearch" type="hidden" value="">
							<i class="fab fa-google"></i>
							<input autocomplete="on" class="form-control search" name="q" placeholder="GOOGLE-Search..." required="required"  type="text">
							<button class="button" type="submit"><i class="fas fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form_logn">
					<div class="style2">
						<button id="btn-main2" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Đăng Kí Gói</button>
						<div id="id01" class="modal">
							<form class="modal-content animate" action="" method="POST">
								<div class="container conta" >
									<div class="row">
										<div class="cot1 col-md-4">           
											<div class="col-md-12">
												<div class="Name">
													<label for="tenlop"><b>Tên Lớp: </b></label>
													<input type="text" placeholder="Lớp ..A.." name="tenlop" required>
													<label for="tenloptruong"><b>Tên Lớp Trưởng: </b></label>
													<input type="text" placeholder="Nguyen Van A" name="tenloptruong" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="Contact Info">
													<label for="username"><b>Ngày Chụp: </b></label>
													<div class="form-group">
														<div class='input-group date' id='datetimepicker'>
															<input type="text" class="form-control" placeholder="dd/xx/yyyy" name="ngaychup" data-format="YYYY/MM/DD" style="margin-bottom: 0px;">
															<span class="input-group-addon">
																<span class="glyphicon glyphicon-time"></span>
															</span>
														</div>
													</div>
													<label for="sdtloptruong"><b>SĐT Lớp Trưởng: </b></label>
													<input type="text" placeholder="PhoneNumber..." name="sdtloptruong" required>
												</div>
											</div>
										</div>
										<div class="cot2 col-md-4">
											<div class="col-md-12">
												<label for="tenbithu"><b>Tên Bí Thư: </b></label>
												<input type="text" placeholder="Nguyen Van B" name="tenbithu" required>
												<label for="sdtbithu"><b>SĐT Bí Thư: </b></label>
												<input type="text" placeholder="PhoneNumber..." name="sdtbithu" required>
												<!-- combobox -->
												<label for="listgoichup"><b>Lựa chọn gói chụp: </b></label>
												<select name="listgoichup" id="input" class="form-control" required="required">
													<option value="goi 1">Vip1</option>
													<option value="goi 2">Vip2</option>
													<option value="goi 3">Vip3</option>
													<option value="goi 4">Vip4</option>
													<option value="goi 5">Vip5</option>
												</select>
											</div>
											<div class='col-md-12'>
												<label for="mail"><b>Email: </b></label>
												<input type="text" placeholder="E-mail@..." name="email" required>
											</div>
										</div>
										<div class="cot3 col-md-4"> 
											<div class='col-md-12'>
												<label for="note"><b>Yêu cầu khác: </b></label>
												<input id="note" type="text" placeholder="Thêm thợ chụp,trang phục ..." name="note" required>
											</div>          
											<div class="col-md-6">
												<button type="submit">Gửi yêu cầu</button>
											</div>
											<div class="col-md-6">
												<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
											</div>
											<div class="col-md-1">
												<div class="imgcontainer">
													<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
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
							<a href="next1.php">Giới Thiệu</a>
							<a href="#test">Chụp Ảnh</a>
							<a href="next1.php">Quay Phim</a>
							<a href="index.php">Báo Giá</a>
							<a href="index.php">Album</a>
							<a href="index.php">Liên Hệ</a>
						</div>
					</div>
					<div class="topnav">
						<a href="3_main.php">Trang Chủ</a>
						<a href="next1.php">Giới Thiệu</a>
						<a href="#test">Chụp Ảnh</a>
						<a href="next1.php">Quay Phim</a>
						<a href="index.php">Báo Giá</a>
						<a href="index.php">Album</a>
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
			<a href="3_main.php" id="menu">Trang Chủ
				<i class="fas fa-home"></i>
			</a>
			<a href="next1.php" id="about">Cá nhân
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			</a>
			<a href="next1.php" id="blog">Tour của bạn
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