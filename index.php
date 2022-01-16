<?php
define('SQLUSR', 'root');
define('SQLPWD', '');
require_once('./db.php');

if(!empty($_REQUEST['addStock'])) {
    // ajout stock
}

if(!empty($_REQUEST['addSale'])) {
    // ajout vente
}

?><!doctype html>
<html>
    <head>
        <title>[ADMIN] Autos Management</title>
        <meta charset="utf8" />
    </head>
    <body>
        <h1>Gestionnaire</h1>
        <p>
            Ce gestionnaire est un test réalisé par <strong>M. Chassel</strong>.
        </p>
        
        <footer>
            Copyright
            <span title="M. Chassel">Baggio SNIR</span>
        </footer>
    </body>
</html>