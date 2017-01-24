<!DOCTYPE html>
<?php 
	include "vue/vue_entete.php";
 ?>
<html>
	<div class="loginmodal-container">
		<h1>Connexion</h1><br>
		  <form action ="controleur/connexion_fin.php" method="POST">
			<input type="text" id="mail" name="mail" placeholder="Mail">
			<input type="password" id="password" name="password" placeholder="Mot de Passe">
			<input type="submit" name="login" class="login loginmodal-submit" value="Connexion">
		  </form>
	</div>
</html>