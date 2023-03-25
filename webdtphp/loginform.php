<!DOCTYPE html>
<head>
<title>ABC Shop - Đăng nhập</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="row">
	<?php if (isset($tb) && $tb != ""){ ?>
	<div class="alert alert-warning alert-dismissible fade in text-center">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo "<p>$tb</p>"; ?>
	</div>
	<?php } ?>
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	</div>
		<div class="col-sm-4"></div>
</div>
<div class="form_container">
	<form method="post" action="index.php" class="box">
		<H1>ĐĂNG NHẬP TÀI KHOẢN</H1>
		<h1>Đăng nhập</h1>
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Đăng nhập</button>
    </form>
    <hr>
    <h2>Đăng nhập với</h2>
    <a href="login.php"><button>Google</button></a>
    <a href="facebook-login.php"><button>Facebook</button></a>
	</form>
</div>
</div>
</body>
</html>