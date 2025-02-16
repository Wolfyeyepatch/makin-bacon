<?php
/**
 * User: S. Tudent
 * Date: Date
 * File: T3_REA_Oefening1.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Realiseren instructies thema 3 en 4.';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>
        <?php
        echo 'Instructies';
        ?>
    </h1>
</header>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <nav>
        <h2>Hoofdmenu</h2>
        <h3>Hoofdstuk 1:</h3>
        <ul>
            <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.1.php">Oefening 1.1</a></li>
            <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.2.php">Oefening 1.2</a></li>
        </ul>
    </nav>
    <h2>
        Uitwerking oefening 3.1
    </h2>

    <?php
    $Carnaval = "carnaval";
    $Dagen3 = "3";
    $Dagen = "zondag, maandag en dinsdag";
    $Dagen40 = "40";
    $Nederland = "Nederland";
    $NoordBrabant = "Noord-Brabant";
    $Worstenbrood = "Worstenbrood, koffie Schrobbler";
    echo ' <h3>Taak 1</h3>';
    $Story = "$Carnaval is van oorsprong een gekerstend heidens volksfeest. Het duurt officieel  $Dagen3 dagen, $Dagen direct voorafgaand aan de vastentijd van 40 dagen. $Carnaval is bij uitstek het feest van zotheid, spot en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel $Nederland een gebruik om $Carnaval op carnavalsvrijdag te openen. Op Aswoensdag wordt $Carnaval afgesloten, maar de tradities verschillen per regio. In het overgrote deel van $NoordBrabant wordt er afgesloten met $Worstenbrood soms met een Brabantse koffietafel.";

        var_dump($Story);
    ?>
    <h3>Taak 2</h3>
    <?php

    $bon1 = "25";
    $bon2 = "25";
    $bon3 = "50";
    $totaal = "100";
    $personen = "5";
    echo "<p>Het totaalbedrag is €" . $bon1 + $bon2 + $bon3 . ",- </p>";
    echo "<p>Kosten per persoon bedragen: €" . $totaal / $personen . ",-  </p>";
    ?>
    <h3>Challenge</h3>
    <?php
    echo "<p>De totaalkosten inclusief fooi zijn €12,25 per persoon.

NOPE</p>";
    ?>
</main>
</body>
</html>