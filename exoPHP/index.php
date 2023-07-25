<?php
require('./test.php');

$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
    'Atlantide' => 20000000
);

$sort_countries_name = Population($pays_population);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Pays avec une population > 20M </h1>
        <ul>
            <?php
            foreach ($sort_countries_name as $country_name) {
                echo "<li>" . $country_name . "</li>";
            }?>
        </ul>
    </body>
</html>