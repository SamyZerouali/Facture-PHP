<?php
include("variables.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page-->
    <meta charset="utf-8">
    <meta name="description" content="madescription..." />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Facture Free Mobile</title>
</head>

<body>
    <div class="facture">
        <header>
            <figure><img src="http://sti2dtransversal.free.fr/images/freemobile.png" alt="Logo Free Mobile"></figure>

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

        <div class="lafacture">
            <ul>
                <li> Facture n°<?php  echo($numero_facture); ?> du <span class="date"> <?php echo($date); ?></span>
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
                            for ($j = 0; $j < count($produit); $j++) // ou alors foreach($produit as $element2) ET changer tous les $produit[$j] 
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


            <div class="apayer">A payer : <?php echo(number_format($total_ttc,2,","," ")." €"); ?> </div>
        </div>
        <div class="payement">
            Prélèvement automatique : <br>
            <?php 
                echo(mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9)." **** **".mt_rand(0,9).mt_rand(0,9));
                ?> <br> <br>
            Prochain payement : <br>
            <?php echo date('d-m-Y', strtotime($date1. ' + 1 month')); ?>
        </div>



        <footer>
            Free Mobile – SAS au capital de 365 138 779 Euros – RCS PARIS 499 247 138 – Siege social : 16 rue de la
            Ville l’Evèque 75008 Paris <br>
            n° TVA Intracommunautaire : FR25499247138

        </footer>
    </div>

    <div class="bonus">
        <div class="imp"><input type="button" value="Imprimer" onclick="window.print()"></div>
    </div>

</body>

</html>