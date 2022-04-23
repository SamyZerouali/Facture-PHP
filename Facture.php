<?php
include("variables.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page-->
    <meta charset="utf-8">
    <meta name="description" content="Votre facture SFR du mois de fevrier" />
    <link rel="stylesheet" href="style.css">
    <title>Facture SFR</title>
</head>

<body>
    <div class="facture">
        <header>
            <figure><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Logo_SFR_2014.svg/1200px-Logo_SFR_2014.svg.png" alt="Logo SFR"></figure>

            <div class="informations_client">
                <p>
                    <?php 
                        for ($i = 0; $i < count($client); $i++)
                        {
                            echo($client[$i]."<br>");
                        }
                     ?>
                </p>
            </div>
        </header>

        <div class="corps">
            <ul>
                <li> Facture n<?php  echo($numero_facture); ?> du <span class="date"> <?php echo($date); ?></span>
                </li>
            </ul>
            <hr>

            <table>
                <tbody>
                    <tr>
                        <?php
                    foreach($entete as $element)
                    {
                        echo("<th>".$element."</th>");
                    }
                    ?>
                    </tr>
                    <?php
                            for ($j = 0; $j < count($produit); $j++)
                        {   echo("<tr>
                                    <td>".$produit[$j]["ref"]."</td>
                                    <td>".$produit[$j]["nom"]."</td>
                                    <td>".$produit[$j]["prixu"]." €</td>
                                    <td>".$produit[$j]["quantite"]."</td>
                                    <td>".$produit[$j]["prixu"] * $produit[$j]["quantite"]." €</td>
                                </tr>
                                ");
                        }
                    ?>
                </tbody>
            </table>

            <p>
                <u>Total HT :</u>
                <?php 
            $total_ht = 0; 
                for ($j = 0; $j < count($produit); $j++)
                {
                    $total_ht += $produit[$j]["prixu"]*$produit[$j]["quantite"];
                }
                echo($total_ht." €");
            ?>
            </p>
            <p>
                <u>Montant TVA :</u>
                <?php 
                $montant_tva = $total_ht*0.2;
                echo($montant_tva." €");
                ?>
            </p>
            <p>
                <u>Total TTC :</u>
                <?php 
                $total_ttc = $total_ht + $montant_tva;

                echo($total_ttc." €");
                ?>
            </p>


            <div class="resteapayer">A payer : <?php echo(number_format($total_ttc,2,","," ")." €"); ?> </div>
        </div>
        <div class="prelevement">
            Prélèvement automatique : <br>
            <?php 
                echo(mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9)." **** **".mt_rand(0,9).mt_rand(0,9));
                ?> <br> <br>
            Prochain payement : <br>
            <?php echo date('d-m-Y', strtotime($date1. ' + 1 month')); ?>
        </div>



        <footer>
        SFR, 42 AVENUE DE FRIEDLAND 75008 PARIS SA AU CAPITAL DE 3 423 265 598,40 EUR RCS PARIS <br>
        N° TVA FR 71 343059564 

        </footer>
    </div>

    <div class="imprimer">
        <div class="imp"><input type="button" value="Imprimer" onclick="window.print()"></div>
    </div>

</body>

</html>