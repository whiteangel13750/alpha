<?php

$plat1 = [
   "Plat 1",
   "img/plat1.jpg",
   "Image plat 1",
    "2h05",
    "8",
    "3/4",
    "3/4",
    "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte///etc ...",
    "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
];

$plat2 = [
    "Plat 2",
    "img/plat2.jpg",
    "Image plat 2",
    "2h05",
    "8",
    "3/4",
    "3/4",
    "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte///etc ...",
    "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
 ];

 $plat3= [
    "Plat 3",
    "img/plat3.jpg",
    "Image plat 3",
    "2h05",
    "8",
    "3/4",
    "3/4",
    "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte///etc ...",
    "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
 ];

    $plats=[$plat1,$plat2,$plat3];
    

    $size = sizeof($plats);
    $titre = "";
    $imagech ="";
    $imagetit = "";
    $temps = "";
    $personnes ="";
    $difficulte ="";
    $cout ="";
    $ingredients ="";
    $etapes="";
    $intro = "";
    $liste = "";

 for($i= 0; $i < $size; $i++) {
    $titre = $plats[$i][0];
    $imagech =$plats[$i][1];
    $imagetit = $plats[$i][2];
    $temps = $plats[$i][3];
    $personnes = $plats[$i][4];
    $difficulte = $plats[$i][5];
    $cout =$plats[$i][6];
    $ingredients = $plats[$i][7];
    $etapes= $plats[$i][8];

    $inter = explode("///", $ingredients);
    $inter2 = explode("///", $etapes);
    
    $intro .="
    <figure class=\"col-4\">
            <h2 class=\"text-center\">$titre</h2>
            <div class=\"img-block\"><img src=\"$imagech\" alt=\"$imagetit\">
            </a></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a dolor justo. ...</p>
        </figure>";

    $liste .="<h1 class=\"recipe-head\">".$titre."</h1><div class=\"illustration img-block\"><img src=\"".$imagech."\" alt=\" $imagetit\"></div><section class=\"row bg-light\">
    <div class=\"col-6\">
                    <table>
                        <tr>
                            <th>Temps de préparation</th>
                            <th>Personnes</th>
                            <th>Difficulté</th>
                            <th>Coût</th>
                        </tr>
                        <tr>
                            <td>$temps</td>
                            <td>$personnes</td>
                            <td>$difficulte</td>
                            <td>$cout</td>
                        </tr>
                    </table>
                    <h2>Ingrédients</h2>
                    <ul>      
                        <li>$inter[0]</li>
                        <li>$inter[1]</li>
                        <li>$inter[2]</li>
                        <li>$inter[3]</li>
                        <li>$inter[4]</li>
                        
                    </ul>
                </div>
                <div class=\"col-6\">
                    <h2>Etapes</h2>
                    <ol>
                        <li>$inter2[0]</li>
                        <li>$inter2[1]</li>
                        <li>$inter2[2]</li>
                    </ol>
                </div>
            </section>";

 };
 

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <nav class="fig-menu row bg-light">
        <?= $intro ?>
    </nav>
       
    <body>
        <?php echo $liste ?>
    </body>
</html>