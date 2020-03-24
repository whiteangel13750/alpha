<?php

$dessert1 = [
   "Dessert 1",
   "img/dessert1.jpg",
   "Image dessert 1",
    "2h05",
    "8",
    "3/4",
    "3/4",
    "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte///etc ...",
    "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
];



    $titre = $dessert1[0];
    $imagech =$dessert1[1];
    $imagetit = $dessert1[2];
    $temps = $dessert1[3];
    $personnes = $dessert1[4];
    $difficulte = $dessert1[5];
    $cout =$dessert1[6];
    $ingredients = $dessert1[7];
    $etapes= $dessert1[8];


?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
            <title><?php echo $titre?></title>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
        
    <body>
    <h1 class="recipe-head"><?php echo $titre?></h1>
        <div class="illustration img-block"><img src="<?php echo $imagech?>" alt="<?php echo $imagetit?>"></img></div>
        <section class="row bg-light">
            <div class="col-6">
                <table>
                    <tr>
                        <th>Temps de préparation</th>
                        <th>Personnes</th>
                        <th>Difficulté</th>
                        <th>Coût</th>
                    </tr>
                    <tr>
                        <td><?php echo $temps?></td>
                        <td><?php echo $personnes?></td>
                        <td><?php echo $difficulte?></td>
                        <td><?php echo $cout?></td>
                    </tr>
                </table>
                
                <h2>Ingrédients</h2>
                <ul><?php echo $ingredients?></ul>
            </div>

                <h2>Etapes</h2>
                <ol><?php echo $etapes?></ol>
            </div>
        </section>
        <hr>
        <section>
    </body>
</html>