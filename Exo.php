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

    $budget = 0;

    do{  
        $budget = readline("Entrez votre budget ? ") ;
    }

    while($budget < 1);
    echo "Budget correct" . "\n";

/* -------------------------------- */
// 3. Dans chaque itération de la boucle :  Demander à l'utilisateur de choisir entre une recette (R) ou une dépense (D).

do  { 
$operation = readline("Choisir entre une recette (R) et une dépense. (D) ");

//3.1 Recettes

if($operation == "R"){

    $recette = readline("Montant de la recette? ");
    $budget = $recette + $budget;
    echo "Nouveau budget : ". $budget . "\n";
}

//3.2 Dépenses

else if($operation == "D"){

    $depense = readline("Montant de la dépense? ");
    $budget = $budget - $depense;

    if($budget < 0){
        echo "Dépassement de budget" . "\n";
        exit ("Fin de processus");

    } else {
        echo "Pourcentage de la dépense sur le budget : ". $depense / $budget * 100 . "\n";
        echo "Nouveau budget : ". $budget . "\n";
    }
}

} while ($budget> 0);














?>
</body>
</html>