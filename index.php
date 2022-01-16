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
        <details>
            <summary>Stocks</summary>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Couleur</th>
                        <th>Marque</th>
                        <th>Prix</th>
                        <th>Date d'entrée</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </details>
        <details>
            <summary>Ventes</summary>
            <table>
                <thead>
                    <tr>
                        <th>Date de vente</th>
                        <th>Couleur</th>
                        <th>Marque</th>
                        <th>Bénéfice</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </details>
        <footer>
            Copyright
            <span title="M. Chassel">Baggio SNIR</span>
        </footer>
    </body>
</html>