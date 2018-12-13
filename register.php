<?php
	include_once 'header.php';
?>

<?php $email_error = $username_error = $pass_error = $empty_error =  $success = ""; ?>
		<section class="main-content">
			<div class="register-form">
				<form class = "register-form" action="register.action.php" method="post">
					<br>
					<input type="text" name="first" placeholder="First Name">
					<br>
					<input type="text" name="last"  placeholder="Last Name">
					<br>
					<input type="email" name="email" placeholder="E-mail Address">
					<span class="form_error">
						<?php echo $_SESSION['email_error'];
									$_SESSION['email_error'] = "";
					 	?>
					</span><br>
					<input type="text" name="username" placeholder="Username">
					<span class="form_error">
						<?php echo $_SESSION['username_error'];
									$_SESSION['username_error'] = "";
						 ?>
					</span><br>
					<input type="password" name="password" placeholder="Password">
					<br>
					<input type="password" name="confirm" placeholder="Confirm Password">
					<span class="form_error">
						<?php echo $_SESSION['pass_error'];
									$_SESSION['pass_error'] = "";
					 	?>
					</span><br>
					<button type="submit" name="register_submit">Submit</button>
					<span class="form_error">
						<?php echo $_SESSION['empty_error'];
									$_SESSION['empty_error'] = "";
									echo $_POST['username'];
						?>
					</span><br>
				</form>
			</div>
		</section>

<?php
	include_once 'footer.php';
?>
