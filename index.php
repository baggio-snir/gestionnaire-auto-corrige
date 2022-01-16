<?php
define('SQLUSR', 'root');
define('SQLPWD', '');
require_once('./db.php');

if(!empty($_REQUEST['addStock'])) {
    addStock($_REQUEST['color'], $_REQUEST['brand'], $_REQUEST['price']);
}

if(!empty($_REQUEST['addSale'])) {
    sellCar($_REQUEST['car'], $_REQUEST['price']);
}

$stocks = getStocks();
$sales = getSales();
$colors = getColors();
$models = getModels();

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
            <fieldset>
                <legend>Entrée d'un stock</legend>
                <form method="post">
                    <p>
                        <select name="brand">
                            <option value="">- Marque -</option>
                            <?php foreach($models as $model) { ?>
                            <option value="<?php echo $model; ?>"><?php echo $model; ?></option>
                            <?php } ?>
                        </select>
                        <select name="color">
                            <option value="">- Couleur -</option>
                            <?php foreach($colors as $color) { ?>
                            <option value="<?php echo $color; ?>"><?php echo $color; ?></option>
                            <?php } ?>
                        </select>
                        <input type="number"
                               name="price"
                               min="0"
                               placeholder="Prix d'achat" />
                        <input type="submit" name="addStock" value="Enregistrer" />
                    </p>
                </form>
            </fieldset>
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
                <tbody>
                    <?php foreach($stocks as $stock) { ?>
                    <tr>
                        <th><?php echo $stock['id']; ?></th>
                        <td><?php echo $stock['color']; ?></td>
                        <td><?php echo $stock['model']; ?></td>
                        <td><?php echo $stock['price']; ?></td>
                        <td><?php echo $stock['entry']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </details>
        <details>
            <summary>Ventes</summary>
            <fieldset>
                <legend>Entrée d'une vente</legend>
                <form method="post">
                    <p>
                        <select name="car">
                            <option value="">- Voiture -</option>
                            <?php foreach($stocks as $stock) { ?>
                            <option value="<?php echo $stock['id']; ?>"><?php echo $stock['model'].' - '.$stock['color'].' - '.$stock['price']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="number"
                               name="price"
                               min="0"
                               placeholder="Prix de vente" />
                        <input type="submit" name="addSale" value="Enregistrer" />
                    </p>
                </form>
            </fieldset>
            <table>
                <thead>
                    <tr>
                        <th>Date de vente</th>
                        <th>Couleur</th>
                        <th>Marque</th>
                        <th>Bénéfice</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($sales as $sale) { ?>
                    <tr>
                        <th><?php echo $sale['soldDate']; ?></th>
                        <td><?php echo $sale['color']; ?></td>
                        <td><?php echo $sale['model']; ?></td>
                        <td><?php echo $sale['soldPrice'] - $sale['price']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </details>
        <footer>
            Copyright
            <span title="M. Chassel">Baggio SNIR</span>
        </footer>
    </body>
</html>