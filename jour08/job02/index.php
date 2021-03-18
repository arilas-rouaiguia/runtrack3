
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
	    <div class="container">
    <header>
<nav>
    <div class="nav-wrapper">
      <a href="" class="brand-logo center">Bienvenue!</a>
      <ul class="left hide-on-med-and-down">
			<li><a href="index.php">Accueil</a></li>
			<li><a href="index.php">Inscription</a></li>
			<li><a href="index.php">Connexion</a></li>
			<li><a href="index.php">Rechercher</a></li>
      </ul>
    </div>
  </nav>	
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
	<div class="card-panel teal lighten-2">
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="card-panel teal lighten-2">
                <h5 class="white-text">Bonjour :^)</h5>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Liens!</h5>
                <ul>
                  <li><a class="yellow-text text-lighten-3" href="index.php">Accueil</a></li>
                  <li><a class="yellow-text text-lighten-3" href="index.php">Inscription</a></li>
                  <li><a class="yellow-text text-lighten-3" href="index.php">Connexion</a></li>
                  <li><a class="yellow-text text-lighten-3" href="index.php">Rechercher</a></li>	
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text CTRL C CTRL V®
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>		
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>