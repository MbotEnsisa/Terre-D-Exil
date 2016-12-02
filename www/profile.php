    <?php include("header.php") ?>

    <?php include("nav.php") ?>
	
	<?php include("profile_template.php") ?>

	<div id="page_droite">
        <h1>Pseudo : <?php echo reset($reponse)['Nickname'];?> 
		<br>E-mail : <?php echo reset($reponse)['Email'];?> </h1>
	</div>

	</div>

    <?php include("footer.php") ?>