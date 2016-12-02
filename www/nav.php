<nav class="navbar navbar-default">
    
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Terre d'Exil</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		<li><a href="DA.php">Démarche Administratives</a></li>
		<li><a href="Discussion.php">Discussion</a></li>
		<li><a href="Lien_utile.php">Association</a></li>
		<li><a href="FAQ.php">FAQ</a></li>
		<?php
			if(!isset($_SESSION['level'])){
				?><li><a href="connexion.php">Connexion</a></li>
				<li><a href="inscription.php">Inscription</a></li><?php
			}else{
				?><li><a href="profile.php">Profil</a></li>
				<li><a href="deconnexion.php">Déconnexion</a></li>
				<?php
			}
		?>
      </ul>
    </div>
      
  </div>
</nav>