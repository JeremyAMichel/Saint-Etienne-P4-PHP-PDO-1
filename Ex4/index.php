<?php
require_once '../utils/connect-db.php';


$sql = "SELECT clients.firstName, clients.lastName, clients.birthDate, clients.cardNumber, cardtypes.type FROM `clients` JOIN cards on clients.cardNumber = cards.cardNumber JOIN cardtypes on cards.cardTypesId = cardtypes.id WHERE cardtypes.type = \"Fidélité\";";

try {

    $stmt = $pdo->query($sql);
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    echo "Erreur de requète : " . $error->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4</title>
</head>

<body>
    <h1>Les clients qui ont une carte de fidélité</h1>

    <ul>
        <?php
        foreach ($clients as $client) {
        ?>
            <li>Prénom : <?= $client['firstName'] ?> | Nom : <?= $client['lastName'] ?> | Date de naissance : <?= $client['birthDate'] ?> |
                Numéro de carte : <?= $client['cardNumber'] ?> | Type de carte : <?= $client['type'] ?></li>

        <?php
        }
        ?>

    </ul>

</body>

</html>