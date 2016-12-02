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
		$reponse->execute(array('Nickname' => $_POST['nickname']));
		$reponse = $reponse->fetchAll();
		
		// On regarde si la recherche a été fructueuse
		if(count($reponse) == 0){
			if($_POST['password']==$_POST['password2']){
				$request = $bdd->prepare('INSERT INTO Profile(nickname,password,email,resume,level,url_img,xp,cj) VALUES(:nickname,:password,:email,:resume,:level,:url_img,:xp,:cj)');
				$request->execute(array('nickname' => $_POST['nickname'],'password' => $_POST['password'],'email' => $_POST['email'],'resume' => $_POST['resume'],'level' => 1,'url_img' => $_POST['image'],'xp'=>0,'cj'=>1));
				$_SESSION['level'] = 1;
				$_SESSION['nickname'] = $_POST['nickname'];

			}
			else
			{
				echo 'Erreur, mot de passe incorrect';
			}
			
		}else{
			echo 'Ce profil existe déjà!!!!!!';
		}
		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";

	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}



	
?>