<?php
require_once '../utils/connect-db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4</title>
</head>

<body>
    <h1>Afficher tous les clients sous un format particulier</h1>

    <hr>
    <!-- EXEMPLE -->
    <article>
        <p><span style="font-weight:bold;">Nom :</span> Nom de famille du client</p>
        <p><span style="font-weight:bold;">Prénom :</span> Prénom du client</p>
        <p><span style="font-weight:bold;">Date de naissance :</span> Date de naissance du client</p>
        <p><span style="font-weight:bold;">Carte de fidélité :</span> Oui (Si le client en possède une) ou Non (s'il n'en possède pas)</p>
        <p><span style="font-weight:bold;">Numéro de carte :</span> Numéro de la carte fidélité du client s'il en possède une</p>
    </article>

    <hr>

</body>

</html>