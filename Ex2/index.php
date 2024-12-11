<?php
require_once '../utils/connect-db.php';


$sql = "SELECT * FROM `showtypes`;";

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
    <title>Ex2</title>
</head>
<body>
    <h1>Tous les types de spectacles possibles</h1>

    <ul>
    <?php
        foreach($spectacles as $spectacle){
        ?>
        <li><?= $spectacle['type'] ?></li>

        <?php
        }
        ?>
        
    </ul>
    
</body>
</html>