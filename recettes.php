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

$dessert2 = [
    "Dessert 2",
    "img/dessert2.jpg",
    "Image dessert 2",
    "2h05",
    "8",
    "3/4",
    "3/4",
    "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte///etc ...",
    "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
 ];

 $dessert3= [
    "Dessert 3",
    "img/dessert3.jpg",
    "Image dessert 3",
    "2h05",
    "8",
    "3/4",
    "3/4",
    "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte///etc ...",
    "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
 ];

    $desserts=[$dessert1,$dessert2,$dessert3];
    

    $size = sizeof($desserts);
    $titre = "";
    $imagech ="";
    $imagetit = "";
    $temps = "";
    $personnes ="";
    $difficulte ="";
    $cout ="";
    $ingredients ="";
    $etapes="";

    $liste = "";

 for($i= 0; $i < $size; $i++) {
    $titre = $desserts[$i][0];
    $imagech =$desserts[$i][1];
    $imagetit = $desserts[$i][2];
    $temps = $desserts[$i][3];
    $personnes = $desserts[$i][4];
    $difficulte = $desserts[$i][5];
    $cout =$desserts[$i][6];
    $ingredients = $desserts[$i][7];
    $etapes= $desserts[$i][8];

    $liste .=
    "<h1>$titre</h1>
    <div><img src=$imagech alt=$imagetit></img></div>
    <div><table><tr><th>Temps de préparation</th><th>Personnes</th><th>Difficulté</th><th>Coût</th></tr><tr><td>$temps</td><td>$personnes</td><td>$difficulte</td><td>$cout</td></tr></table>
    <h2>Ingrédients</h2>
    <ul><li>$ingredients</li></ul></div>
    <h2>Etapes</h2>
    <div><ol><li>$etapes</li></ol></div>";
 };
 


?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
            <title>Dessert 1</title>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
        
    <body>
        <?php echo $liste ?>
    </body>
</html>