<?php include("header.php") ?>
<?php include("nav.php") ?>


<?php
	session_start();
?>

<div class="container">
    
    <form class="form-signin" action="registre.php" method="post">
        <center><h2 class="form-signin-heading">Connectez vous !</h2></center>
        <input style="text-align:center" type="text" name ="login" class="form-control" placeholder="LogIn" required autofocus/>
        <input style="text-align:center" type="password" id="inputPassword"  name ="password" class="form-control" placeholder="Password" required/>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Valider" />  
    </form>
    
    

    
</div>
    
<?php include("footer.php") ?>