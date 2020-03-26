<h3>Forma za logovanje</h3>
	<div id="login">
		<?php 
		// var_dump($_SESSION);
			if(isset($_SESSION['korisnik'])):
				var_dump($_SESSION['korisnik']);
		?>

		<h3>Username korisnika: <?= $_SESSION['korisnik']->korisnicko_ime; ?></h3>
		<h3>Email korisnika: <?= $_SESSION['korisnik']->email; ?></h3>

		<?php else: ?>
		<form method="POST" action="php/login.php">
			<input type="text" name="tbEmail" placeholder="Your email" class="login-input"/><br/>
			<input type="password" name="tbLozinka" placeholder="Your password" class="login-input"></br>
			<input type='submit' name="btnLogin" value="Login"/>
		</form>
		<?php endif; ?>
		<?php if(isset($_SESSION['greske'])):
			var_dump($_SESSION['greske']);
			unset($_SESSION['greske']);
		?>
		<?php endif; ?>
	</div>