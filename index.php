<?php
/*

Les règles du jeu sont les suivantes :

    le pistolet bat le poing mais perd contre le fouet
    le poing bat le fouet mais perd contre le pistolet
    le fouet bat le pistolet mais perd contre le poing

Le programme doit donc assigner une arme à la variable $indyWeapon.
Cette arme doit être meilleure que celle de l'adversaire.

*/

$weapons = ['fists', 'whip', 'gun'];

$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

$indyWeapon = "any weapon";
$message = "";

switch  ($opponentWeapon){
    case 'fists' :
        $indyWeapon = 'gun';
        break;
    case 'whip' :
        $indyWeapon = 'fists';
        break;
    case 'gun' :
        $indyWeapon = 'whip';
        break;
}

echo '<h1>Point, fouet et pistolet</h1>';
echo '<b>Les règles du jeu sont les suivantes :</b>';
echo '<ul>';
echo '<li>le pistolet bat le poing mais perd contre le fouet</li>';
echo '<li>le poing bat le fouet mais perd contre le pistolet</li>';
echo '<li>le fouet bat le pistolet mais perd contre le poing</li>';
echo '</ul>';

if (($indyWeapon == "gun" && $opponentWeapon == "fists") || ($indyWeapon == "fists" && $opponentWeapon == "whip") || ($indyWeapon == "whip" && $opponentWeapon == "gun")){
    $message = "You win !";
}
else {
    $message = "You lost !";
}

echo "Indian have $indyWeapon and your opposant have $opponentWeapon : $message";
