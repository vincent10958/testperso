<?php
$produits = [
    ['nom' => 'Clavier', 'prix' => 15000],
    ['nom' => 'Souris', 'prix' => 7000],
    ['nom' => 'Écran', 'prix' => 55000],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Produits</title>
</head>
<body>
    <h1>Produits disponibles</h1>
    <ul>
        <?php foreach($produits as $produit): ?>
        <li>
            <?= $produit['nom']?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
