<?php include "../lib/Session.php";
		Session::checkLogin();

 include "../Config/config.php";
 include "../lib/Database.php";
 include "../Format/Format.php";

	$db = new Database();
	$fm = new Format();
$error='';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$username = $fm -> validation($_POST['username']);
			$password = $fm -> validation(md5($_POST['password']));

			$username = mysqli_real_escape_string($db->link, $username);
			$password = mysqli_real_escape_string($db->link, $password);

			$query = "SELECT * FROM brb_login WHERE username = '$username' AND password = '$password'";
			$result = $db->select($query);
			if($result != false){
				$value = mysqli_fetch_array($result);
				$row = mysqli_num_rows($result);
				if($row > 0){
					Session::set("login", true);
					Session::set("username", $value['username']);
					Session::set("userId", $value['id']);
					header("Location:index.php");
					
				}else{
					$error= "<span style ='color: red; font-size=18px; '>No Result Found !!</span>";
				} 
				}else{
					$error= "<span style ='color: red; font-size=18px; '>Username or Password Not Matched !!</span>";
			}
		}
	?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
	<?php if(!empty($error)){ echo $error;}?>
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="ForgotPassword.php">Forgot Password !</a>
		</div><!-- button -->
		<div class="button">
			<a href="#"></a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>