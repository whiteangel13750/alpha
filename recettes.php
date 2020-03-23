<?

$recette_test = [
   "titre" =>"Dessert 1",
   "imagech" =>"../../img/dessert1.jpg",
   "imagetit" =>"Image dessert 1",
    "temps"=>"2h05",
    "personnes"=>"8",
    "difficulte"=>"3/4",
    "cout"=>"3/4",
    "titre2"=>"Ingrédients",
    "ingredients"=>"1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte///etc ...",
    "titre3"=>"Etapes",
    "etapes"=>"Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation.",
];

// $size = sizeof($recette_test)
// $titre = "";
// $img = "";
// $imglien ="";
// $chimg ="";
// $tiimg = "";
// $temps ="";
// $personnes ="";
// $difficulté ="";
// $cout ="";
// $titre2="";
// $ingrédients ="";
// $titre3="";
// $etapes="";



// for($i= 0; $i < $size; $i++) {
    $titre = $recette_test[titre];
    $imagech =$recette_test[imagech];
    $imagetit = $recette_test[imagetit];
    $temps =$recette_test[temps];
    $personnes =$recette_test[personnes];
    $difficulte =$recette_test[difficulte];
    $cout =$recette_test[cout];
    $titre2=$recette_test[titre2];
    $ingrédients =$recette_test[ingredients];
    $titre3=$recette_test[titre3];
    $etapes=$recette_test[etapes];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
        <title>Dessert 1</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    
<body>
    <h1><?php$titre?></h1>
    <div><img src="<?php $imagech ?>" alt="<?php $imagetit ?>"></img></div>
    <div><table><tr><th>Temps de préparation</th><th>Personnes</th><th>Difficulté</th><th>Coût</th></tr><tr><td><?php $temps ?></td><td><?php $personnes ?></td><td><?php $difficulte ?></td><td><?php $cout ?></td></tr></table>
    <h2><?php$titre2?></h2>
    <ul><li><?php $ingredients?></li></ul></div>
    <h2><?php $titre3?></h2>
    <div><ol><li><?php$etapes?></li></ol></div>
</body>
</html>
