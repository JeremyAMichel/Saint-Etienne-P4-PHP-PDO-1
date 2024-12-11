<?php
require_once '../utils/connect-db.php';

$sql = "SELECT * FROM clients LIMIT 20;";

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
    <title>Ex3</title>
</head>

<body>
    <h1>Les 20 premiers clients</h1>

    <ul>
        <?php
        foreach ($clients as $client) {
        ?>
            <li>Prénom : <?= $client['firstName'] ?> | Nom : <?= $client['lastName'] ?></li>

        <?php
        }
        ?>
    </ul>

</body>

</html>