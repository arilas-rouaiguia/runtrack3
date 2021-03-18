<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Oui</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="ide1.css">
</head>
<body>
    <header>  
    </header>
<p>Civilité</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Homme</label> <br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Femme</label> <br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Autre</label> <br>
  
<label for="name">Prénom :</label>  
<input type="text" id="name" name="name" required
       minlength="5" maxlength="15" size="20">
	   
	   <label for="lastname">Nom :</label>  
<input type="text" id="lastname" name="lastname" required
       minlength="5" maxlength="15" size="20">
	   
	   <label for="location">Adresse :</label>  
<input type="text" id="location" name="locations" required
       minlength="5" maxlength="15" size="20">

	   <label for="email">Email :</label>  
<input type="text" id="email" name="email" required
       minlength="5" maxlength="30" size="30">	  

    <label for="pass">Mot de passe:</label>
    <input type="password" id="pass" name="password"
           minlength="8" required>

    <label for="confpass"> Confirmer Mot de passe:</label>
    <input type="password" id="confpass" name="conf	password"
           minlength="8" required>	<br><br><br>

  <input type="checkbox" id="info" name="info">
  <label for="horns">Informatique</label><br>

  <input type="checkbox" id="voyages" name="voyages">
  <label for="horns">Voyages</label><br>

  <input type="checkbox" id="sport" name="sport">
  <label for="horns">Sport</label><br>

  <input type="checkbox" id="lecture" name="lecture">
  <label for="horns">Lecture</label><br>

 <button type="button">Confirmer.</button>   
		
		<footer>	
			<li><a href="index.php">Accueil</a></li>
			<li><a href="index.php">Inscription</a></li>
			<li><a href="index.php">Connexion</a></li>
			<li><a href="index.php">Rechercher</a></li>	
		</footer>
</body>
</html>