<form action="./indice.php "method="post">
			<div class="form-group">
			<label for="mail">Mail* : </label>
			<input id="mail" placeholder="Adresse mail" class="form-control" type="email" name="mail" value="<?php if (isset($_POST['mail'])){echo htmlspecialchars($_POST['mail']);} ?>"/>
			</div>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="indice" value="Obtenir son indice" /></p>
			
 </form>
