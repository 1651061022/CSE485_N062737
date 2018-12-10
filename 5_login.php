<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<script type="text/javascript" src="js/myscript.js"></script>
</head>
<body>
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

	<div id="id01" class="modal">
		<form class="modal-content animate" action="/action_page.php" method="GET">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<img src="image/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="container">
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>

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