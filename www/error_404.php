<?php include("header.php"); ?>
<?php include("nav.php"); ?>

<div id="erreur">
        
    <div id="title">
        ERREUR 404 !
    </div>
    
    <p>Oh... C'est Dommage mais la page que vous avez demandé est parti prendre un café :(</p>
    
    <p>L'url que vous avez demandé est certainement perdu dans les tréfonds. Vous devriez appuyer sur l'un des boutons ci-dessous.</p>

    <button class="btn-lg" onClick="document.location.href='/'">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-home"></span>
        </div>
    </button>
    
    <button class="btn-lg" onClick='javascript:history.go(-1)'>
        <div class="panel-heading">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </div>
    </button>

</div>

<?php include("footer.php"); ?>