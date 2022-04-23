<?php
$client = array("Samy ZEROUALI", "7 Avenue du Capitaine Scott", "06300 Nice");

// Numero de facture aléatoire

$numero_facture = mt_rand(000001, 999999);
    
// Date de la facture

$date1 = date('Y-m-d'); 
    setlocale(LC_TIME, "fr_FR");
    $date = strftime("%d %B %G", strtotime($date1));


$produit = array( // Information du tableau de la facture
        array(
            'ref' => "ABCDE",
            'nom' => "Appel(s) en France métropolitaine",
            'prixu' => 1.6,
            'quantite' => mt_rand(1, 10)
        ),

        array(
            'ref' => "FGHIJ",
            'nom' => "Donées mobiles",
            'prixu' => 2.5,
            'quantite' => mt_rand(1, 10)    
        ),

        array(
            'ref' => "KLMNO",
            'nom' => "SMS à l'étranger",
            'prixu' => 0.5,
            'quantite' => mt_rand(1, 10)
        ),

        array(
            'ref' => "PQRST",
            'nom' => "Appel(s) à l'étranger",
            'prixu' => 3,
            'quantite' => mt_rand(1, 10)
        ),

        array(
            'ref' => "UVWXY",
            'nom' => "SMS en France métropolitaine ",
            'prixu' => 0.9,
            'quantite' => mt_rand(1, 10)    
        )
    );

    $entete = array("Référence", "Nom", "Prix unitaire HT", "Quantité", "Prix HT"); // Entete du tableau
?>
