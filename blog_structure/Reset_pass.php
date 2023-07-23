<?php include 'header.php';?>
<?php include('config.php');
session_start();
$message = '';
$id = $_GET['MnoQtyPXZORTE'];
$message = $Home = '';
$_SESSION['user'] = $id;
if ($_SESSION['user'] == '') {
		header("location:forgot.php");
}
else
{
if(isset($_POST['submit'])) {
	$password = $_POST['password'];
	$Repassword = $_POST['Repassword'];

	if ($password !== $Repassword) {
		$message = "<div class='alert alert-danger'>Password Not Match..!!</div>";
	}
	else{
	$id_decode = base64_decode($id);
	$query = "UPDATE login SET password = '$password' WHERE id = '$id_decode' ";
	$result = $conn->query($query);
		if($result){
			$message = "<div class='alert alert-success'>Reset Your Password Successfully..</div>";
			$Home = "<a href='index.php' class='btn btn-success btn-sm'>Login</a>";
	}else{
		$message = "<div class='alert alert-danger'>Failed to Reset Password..!!</div>";
	}
	}
}
}
?>

		<div class="container w-50 mt-5">
			<form class="bg-light p-5 shadow-lg" method="post">	
				<?php echo $message; ?>
				<h1 class="text-success">Forget Password</h1>
				<label for="password">Password</label>
				<input type="text" name="password" placeholder="Password" class="form-control form-control-sm" required><br>
				<label for="password">Retype Password</label>
				<input type="text" name="Repassword" placeholder="Retype Password" class="form-control form-control-sm" required><br>
				<button type="submit" name="submit" class="btn btn-success btn-sm">Reset Password</button> <?php echo $Home; ?>
			</form>
		</div>
