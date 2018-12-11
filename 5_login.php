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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script type="text/javascript" src="js/myscript.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

	<div id="id01" class="modal">
		<form class="modal-content animate" action="/action_page.php" method="GET">
			<div class="container">
				
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
			<div class="container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				<span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		</form>
	</div>
</body>
</html>