<?php

/* Wassim MESFIOUI */

function CleanUp(array $tableau): array
{
    $table_without_duplicates = array_unique($tableau);
    return $table_without_duplicates;
}

function Stars()
{
    $star = "*";
    $x = 10;

    for ($i = 1; $i <= $x; $i++) {
        echo str_repeat($star, $i) . PHP_EOL;
    }
}

function Payer(int $budget, int $achats): bool
{
    return $budget >= $achats;
}

function Numbers()
{
    $step = 5;
    $current_number= "";

    for ($i = 1; $i <= $step; $i++) {

        for ($z = 1; $z <= $i; $z++) {
            $current_number .= $i;
        }
        $current_number .= PHP_EOL;
    }

    echo $current_number;
}

function Population(array $country_population): array
{
    $final_country_population = [];

    foreach ($country_population as $keys => $value) {
        if($value >= 20000000) {
            array_push($final_country_population, $keys);
        }
    }

    return $final_country_population;
}

function QuelleAnnee(): int
{
    return date("Y");
}

function Tirage($input): int
{
    if ($input < 100 || $input > 999) {
        echo "Veuillez entrer un nombre de 3 chiffres.";
        return -1; // Valeur de retour invalide pour indiquer une erreur.
    }

    for ($step = 1; ; $step++) {
        $random_number = rand(100, 999);

        if ($random_number === $input) {
            return $step;
        }
    }
}

/* CleanUp */
// $tableau=[1,1,2,2,3,3];
// var_dump($tableau);
// $tableau_sans_doublons = CleanUp($tableau);
// var_dump($tableau_sans_doublons);


/* Stars */
// Stars();


/* Payer */
// $budget = (int) readline("Votre budget: ");
// $achats = (int) readline("Vos achats: ");
// $value = Payer($budget, $achats);
// var_dump($value);


/* Numbers */
// Numbers();


/* Population */
// Check with index.php


/* QuelleAnnee */
// $year = QuelleAnnee();
// echo $year;

/* Tirage */
// $number = (int) readline("Votre nombre à 3 chiffres: ");
// $draw = Tirage($number);
// if ($draw !== -1) {
//     echo $draw;
// }
