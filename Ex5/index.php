<?php
require_once '../utils/connect-db.php';

$sql = "SELECT clients.firstName, clients.lastName FROM `clients` WHERE clients.lastName LIKE 'M%' ORDER BY clients.lastName ASC;";

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
    <title>Ex5</title>
</head>

<body>
    <h1>Clients dont le nom commence par la lettre "M" par ordre alphabétique</h1>

    <!-- EXEMPLE -->

    <?php
    foreach ($clients as $client) {
    ?>
        <div>
            <p><span style="font-weight:bold;">Nom :</span> <?= $client['lastName'] ?></p>
            <p><span style="font-weight:bold;">Prénom :</span> <?= $client['firstName'] ?></p>
        </div>

    <?php
    }
    ?>


</body>

</html>