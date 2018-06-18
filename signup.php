<?php
include_once "header.php"
?>

<link rel="stylesheet" type="text/css" href="style.css">

<section class="main-container">
	<div class="main_wrapper">
		<h1 id="h1signup">SignUp</h1>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="Firstname" >
			<input type="text" name="last" placeholder="Lastname">
			<input type="email" name="E-mail" placeholder="Firstname">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Sign Up</button>
		</form>
	</div>
</section>

<?php
include_once "footer.php"
?>