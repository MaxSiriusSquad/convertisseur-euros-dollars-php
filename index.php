<?php

$nbEuros = 0;

if(!empty($_GET['nbEuros'])) {
    $nbEuros = $_GET['nbEuros'];
    $nbDollars = $_GET['nbEuros']*1.12;
}


?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Mon convertisseur Euros > Dollars</title>
</head>

<body>

<header>
    <h1>Mon convertisseur Euros > Dollars</h1>
</header>

<main>

    <div>
        <img src="./trumpriche-fr.jpg" alt="">
    </div>

    <div class="form-and-result">
        <div class="form">
            <form action="index.php" method="GET">
                <label for="">Montant en euros : </label>
                <input type="number" name="nbEuros" id="nbEuros"> <br>
                <button>Calculer</button>
            </form>
        </div>

        <div class="result">

            <p>Montant saisi = <?php echo $nbEuros . " €" ?></p>
            <?php
            if(empty($nbDollars)){
                echo '<p>Montant converti = 0 $</p>';
            } else {
                echo '<p>Montant converti = ' . $nbDollars . ' $</p>';
            }
            ?>

        </div>
    </div>

    <a href="index.php">Nouvelle conversion</a>
</main>

<footer>
    MaxSiriusSquad - 2019 | Promo Sirius - O'Clock
</footer>

</body>

</html>