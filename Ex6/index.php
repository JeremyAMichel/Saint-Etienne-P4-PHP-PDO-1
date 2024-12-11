<?php
require_once '../utils/connect-db.php';

$sql = "SELECT shows.`title`, shows.performer, shows.`date`, shows.`startTime` FROM `shows` ORDER BY shows.title ASC;";

try {

    $stmt = $pdo->query($sql);
    $spectacles = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
    <h1>Titre de tous les spectacles par ordre alphabétique ainsi que l'artiste, la date et l'heure.</h1>


    <ul>
        <?php
        foreach ($spectacles as $spectacle) {
        ?>
            <li><?= $spectacle['title'] ?> par <?= $spectacle['performer'] ?>, le <?= $spectacle['date'] ?> à <?= $spectacle['startTime'] ?></li>

        <?php
        }
        ?>
        
    </ul>

</body>

</html>