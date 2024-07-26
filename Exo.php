<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/* -------------------------------- */

echo "LA GESTION DU BUDGET" . "\n";

/* -------------------------------- */
// 1. Demander à l'utilisateur de saisir son budget initial.

// 2. Créer une boucle qui continue tant que l budget n'est pas nul.

    do{  
        $budget = readline("Entrez votre budget ? ") . "\n";
    }

    while($budget < 1);
    echo "Budget correct" . "\n";

/* -------------------------------- */
// 3. Dans chaque itération de la boucle :  Demander à l'utilisateur de choisir entre une recette (R) ou une dépense (D).

readline("Choisir entre une dépense ou une recette ? ") . "\n";

//3.1 Recettes

if  ("recette") {
    $recette = readline("Merci d'insérer le montant de la recette. ") . "\n";

    $budget = $budget + $recette . "\n";

    echo "Votre budget actuel est de : " . $budget . "\n";
}

//3.2 Dépenses




?>
</body>
</html>