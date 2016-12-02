<?php
	if(!isset($_SESSION['level'])){
		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
	}
	try
	{
		// Connexion à la BDD
		$bdd = new PDO('mysql:host=localhost;dbname=TerreExil_DB', 'root', 'TipamEnsisa');
		
		// On cherche toutes les occurences de nickname dans la BDD
		$reponse = $bdd->prepare('SELECT * FROM Profile WHERE Nickname=:Nickname');
		$reponse->execute(array('Nickname' => $_SESSION['nickname']));
		$reponse = $reponse->fetchAll();
		

	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
?>		
		
		<div id="contenu">
		<div id="page_gauche">
			<table>
				<tr>
					<td>
						<img src=<?php echo reset($reponse)['URL_img'];?>>
					</td>
					<td>
						<a href="profile.php"><img src="/img/profile.png">Profil</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="profilelevel.php"><img src="/img/level.png">Level</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="profileresume.php"><img src="/img/resume.png">Resume</a>
					</td>
				</tr>
			</table>
		</div>