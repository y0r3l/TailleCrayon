<form  action="./inscription.php" method="POST">
            <div class="form-group">
			<label for="nom">Nom *:  </label>
			<input id="nom" class="form-control" type="text" name="nom" placeholder="Nom" value="<?php if (isset($_POST['nom'])){echo htmlspecialchars($_POST['nom']);} ?>" size="10"/>
			</div>
			<div class="form-group">
			<label for="nom">Prénom*: </label>
			<input id="prenom" class="form-control" type="text" name="prenom" placeholder="prenom" value="<?php if (isset($_POST['prenom'])){echo htmlspecialchars($_POST['prenom']);} ?>"/>
			</div>
			<div class="form-group">
			<label for="mail">Mail* : </label>
			<input id="mail" placeholder="Adresse mail" class="form-control" type="email" name="mail" value="<?php if (isset($_POST['mail'])){echo htmlspecialchars($_POST['mail']);} ?>"/>
			</div>
			<div class="form-group">
			<label for="mdp" >Mot de passe* : </label>
			<input id="mdp" placeholder="Mot de passe" class="form-control" type="password" name="mdp"/>
			</div>
			<div class="form-group">
			<label for="indice">Indice pour le mot de passe* : <img src="./point_info.png" height="15" width="15" title="Ce champ vous permet de renseigner une ou plusieurs informations afin de vous souvenir de votre mot de passe. Veillez à ne pas mettre directement votre mot de passe."/> </label>
			<input id="indice" placeholder="Indice pour le mot de passe" class="form-control" type="text" name="indice" value="<?php if (isset($_POST['indice'])){echo htmlspecialchars($_POST['indice']);} ?>"/>
			</div>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="se_inscrire" value="S'inscrire" /></p>
 </form>
