<form action="./connexion.php "method="post">
			<div class="form-group">
			<label for="mail">Mail* : </label>
			<input id="mail" placeholder="Adresse mail" class="form-control" type="email" name="mail" value="<?php if (isset($_POST['mail'])){echo htmlspecialchars($_POST['mail']);} ?>"/>
			</div>
			<div class="form-group">
			<label for="mdp" >Mot de passe* : </label>
			<input id="mdp" placeholder="Mot de passe" class="form-control" type="password" name="mdp" />
			<p><a href="./indice.php">Mot de passe oublié : obtenir son indice</a></p>
			</div>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="se_co" value="Se connecter" /></p>
 </form>
