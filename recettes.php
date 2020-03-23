<?php

$dessert1 = [
   "titre" =>"Dessert 1",
   "imagech" =>"img/dessert1.jpg",
   "imagetit" =>"Image dessert 1",
    "temps"=>"2h05",
    "personnes"=>"8",
    "difficulte"=>"3/4",
    "cout"=>"3/4",
    "ingredients"=>"1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte///etc ...",
    "etapes"=>"Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
];

$dessert2 = [
    "titre" =>"Dessert 2",
    "imagech" =>"img/dessert2.jpg",
    "imagetit" =>"Image dessert 2",
     "temps"=>"2h05",
     "personnes"=>"8",
     "difficulte"=>"3/4",
     "cout"=>"3/4",
     "ingredients"=>"1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte///etc ...",
     "etapes"=>"Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
 ];

 $dessert3= [
    "titre" =>"Dessert 3",
    "imagech" =>"img/dessert3.jpg",
    "imagetit" =>"Image dessert 3",
     "temps"=>"2h05",
     "personnes"=>"8",
     "difficulte"=>"3/4",
     "cout"=>"3/4",
     "ingredients"=>"1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte///etc ...",
     "etapes"=>"Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
 ];

    $desserts=['$dessert1','$dessert2','$dessert3'];

    $size = sizeof($desserts);
    $titre = "";
    $imagech = "";
    $imagetit = "";
    $temps ="";
    $personnes ="";
    $difficulte ="";
    $cout ="";
    $ingrédients ="";
    $etapes="";

    $liste = "";

 for($i= 0; $i < $size; $i++) {
    $titre = $desserts[$i]["titre"];
    $imagech =$desserts[$i]["imagech"];
    $imagetit = $desserts[$i]["imagetit"];
    $temps = $desserts[$i]["temps"];
    $personnes = $desserts[$i]["personnes"];
    $difficulte = $desserts[$i]["difficulte"];
    $cout =$desserts[$i]["titre2"];
    $ingrédients = $desserts[$i]["ingredients"];
    $etapes= $desserts[$i]["etapes"];
    $liste .="<h1>$titre</h1>
    <div><img src="$imagech" alt="$imagetit"></img></div>
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
        <h1><?php echo $titre?></h1>
        <div><img src="<?php echo $imagech?>" alt="<?php echo $imagetit?>"></img></div>
        <div><table><tr><th>Temps de préparation</th><th>Personnes</th><th>Difficulté</th><th>Coût</th></tr><tr><td><?php echo $temps?></td><td><?php echo $personnes?></td><td><?php echo $difficulte?></td><td><?php echo $cout?></td></tr></table>
        <h2>Ingrédients</h2>
        <ul><li><?php echo $ingredients?></li></ul></div>
        <h2>Etapes</h2>
        <div><ol><li><?php echo $etapes?></li></ol></div>
    </body>
</html>