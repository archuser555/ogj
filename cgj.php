<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width, initial-scale=1">
	<title>Cecar: register</title>

	<link rel="stylesheet" type="text/css" href="./static/style2.css" />
</head>
<body style="background-color: #28254c;">

	<section class="login">
		<div class="box">
			<div class="login-form">
				<form action="../api/shit.php?creator=55" method="POST" enctype="multipart/form-data">
					<div class="top">
						<input type="text" name="title" id="title" placeholder="Jam Title">
						<input type="number" name="days" id="days" placeholder="Days">
                        <input type="text" name="desc" id="desc" placeholder="Description">
                        <input type="text" name="prize" id="prize" placeholder="Prize, Ex: 10$">
                        <h6 align="center">Jam Thumbnail, only jpg and 1280X720</h6><input type="file" name="thumb" id="uname">
					</div>
					<div class="bottom">						
						<div><input type="submit" name="submitbtn" value="register" onclick="register()"></div>
					</div>
				</form>
			</div>
		</div>
	</section>
</body>
</html>