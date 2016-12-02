<?php
	session_start();
?>

<?php
	try
	{
		// Connexion à la BDD
		$bdd = new PDO('mysql:host=localhost;dbname=TerreExil_DB', 'root', 'TipamEnsisa');
		
		// On cherche toutes les occurences de nickname dans la BDD
		$reponse = $bdd->prepare('SELECT * FROM Profile WHERE Nickname=:Nickname');
		$reponse->execute(array('Nickname' => $_POST['login']));
		$reponse = $reponse->fetchAll();
		
		// On regarde si la recherche a été fructueuse
		if(count($reponse) != 0){
			$passOk = false;
			// On vérifie que les mots de passe match
			foreach($reponse as $value){
				if($value['Password']==$_POST['password']){
					$passOk = true;
				}
			}
			if($passOk){
				echo 'Authentification OK';
				$_SESSION['level'] = 1;
				$_SESSION['nickname'] = $_POST['login'];
				$req = $bdd->prepare('UPDATE Profile SET Level = :nvxp WHERE Nickname = :nickname');
				$req->execute(array('nvxp' => reset($reponse)['Level']+1,'nickname' => $_SESSION['nickname']));
				
			}else{
				echo 'Mauvais mot de passe!';
				
			}
		}else{
			echo 'Ce profil n\'existe pas!!!!!!';
			
		}
		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";

	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}



	
?>


