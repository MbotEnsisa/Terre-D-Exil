<?php include("header.php") ?>
<?php include("nav.php") ?>

<?php
	session_start();
?>

<div class="container">
    
    <form class="form-signin" action="create_profile.php" method="post">
        <center><h2>Inscrivez vous !</h2></center>
        <input style="text-align:center" class="form-control" type="text" name = "nickname" placeholder="Nickname" required autofocus/>
        <input style="text-align:center" class="form-control" type="password" name = "password" placeholder="Password" required/>
        <input style="text-align:center" class="form-control" type="password" name = "password2" placeholder="Password Verify" required/>
        <input style="text-align:center" class="form-control" type="email" name = "email" placeholder="Email" required/>
        <input style="text-align:center" class="form-control" type="text" name = "image" placeholder="URL Image" required/>
        <input style="text-align:center" class="form-control" type="text" name = "resume" placeholder="Résumé" required/>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Valider" />  

    </form>
    
</div>

<?php include("footer.php") ?>