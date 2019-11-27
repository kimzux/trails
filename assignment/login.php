/*<?php include 'header.php'; ?>
<?php 

if(isset($_POST['submit'])) {

	include 'db.php';

	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$query = "SELECT * FROM register WHERE email = '$email' AND password = '$pass'";
	$res = mysqli_query($db,$query);
	$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
	$count = mysqli_num_rows($res);

	if($count == 1) {

		header("location: action_page.php");

	}else {

		echo "WRONG CREDETINALS";
		header("location: login.php");

	}


}






?>






<div class="container">
	<h1 class="text-center">LOGIN INFO</h1>
	<form method="post" action="login.php">
	<label class="label">Email</label>
	<input type="email" name="email" required="">
	<label class="label">Password</label>
	<input type="password" name="pass" required="">
	<input type="submit" name="submit" class="btn btn-info">
</div>






<?php include 'footer.php'; ?>