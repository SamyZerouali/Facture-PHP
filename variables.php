<?php
$client = array("Pierre Velon", "23 Place de la Bourse", "75002 Paris");

// Numero de facture aléatoire
$numero_facture = mt_rand(000001, 999999);
    
// date de la facture
$date1 = date('Y-m-d'); 
    setlocale(LC_TIME, "fr_FR");
    $date = utf8_encode(strftime("%d %B %G", strtotime($date1)));


$produit = array( // information du tableau de la facture
        array(
            'ref' => "EACGTUV",
            'nom' => "Appel(s) en france métropolitaine",
            'prixu' => 1.6,
            'quantite' => mt_rand(1, 10)
        ),

        array(
            'ref' => "KIHCUXET",
            'nom' => "Appel(s) à l'étranger",
            'prixu' => 2.5,
            'quantite' => mt_rand(1, 10)    
        ),

        array(
            'ref' => "OMFDCXS",
            'nom' => "SMS en france métropolitaine",
            'prixu' => 0.5,
            'quantite' => mt_rand(1, 10)
        ),

        array(
            'ref' => "WLBYFXC",
            'nom' => "SMS à l'étranger",
            'prixu' => 0.9,
            'quantite' => mt_rand(1, 10)    
        )
    );

    $entete = array("Référence", "Nom", "Prix unitaire HT", "Quantité", "Prix HT"); // tableau entete
?>
