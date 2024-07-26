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
    echo "Budget correct";

?>
</body>
</html>