    <?
    
    $lien = [
        "recettes/entree.html",
        "recettes/plat.html",
        "recettes/dessert.html"]

    $titre = [
        "Les entrées",
        "Les plats",
        "Les desserts"
    ]

    $titres1 = [
        "Les entrées",
        "Les plats",
        "Les desserts"
    ]

    $souslien1 =[
        "recettes/entrees/entree1.html",
        "recettes/entrees/entree2.html",
        "recettes/entrees/entree3.html"
    ]

    $souslien2 =[
        "recettes/plats/plat1.html",
        "recettes/plats/plat2.html",
        "recettes/plats/plat3.html"
    ]

    $souslien3 =[
        "recettes/desserts/dessert1.html",
        "recettes/desserts/dessert2.html",
        "recettes/desserts/dessert3.html"
    ]


    $souslien = [$souslien1, $souslien2, $souslien3]

    $size = sizeof($souslien)

    $lien = "";
    $souslien = "";
    for($i= 0; $i < $size; $i++) {
        $titre .=$titre[$i]
        $lien .= $lien[$i];
        $souslien .= $souslien[$i];
    ?>
    
    <!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <header>
            <nav class="menu">
                <ul>
                <li><a href ="#">Page d'accueil</a></li>
                <li><a href =<?php $lien?>><?$titress?></a></li>
                <ul class="sous-menu">
                <li><a href =<?php $souslien?>></a></li>
                </ul>
            <header>
    </body>   
    
    
    <!-- <ul>
        <li><a href ="#">Page d'accueil</a></li>
        <li><a href ="recettes/entree.html">Les entrées</a>
            <ul class="sous-menu">
                <li><a href ="recettes/entrees/entree1.html">Entrée 1</a></li>
                <li><a href ="recettes/entrees/entree2.html">Entrée 2</a></li>
                <li><a href ="recettes/entrees/entree3.html">Entrée 3</a></li>
            </ul>
        </li>
        <li><a href ="recettes/plat.html">Les plats</a>
            <ul class="sous-menu">
                <li><a href ="recettes/plats/plat1.html">Plat 1</a></li>
                <li><a href ="recettes/plats/plat2.html">Plat 2</a></li>
                <li><a href ="recettes/plats/plat3.html">Plat 3</a></li>
            </ul>
        </li>
        <li><a href ="recettes/dessert.html">Les desserts</a>
            <ul class="sous-menu">
                <li><a href ="recettes/desserts/dessert1.html">Dessert 1</a></li>
                <li><a href ="recettes/desserts/dessert2.html">Dessert 2</a></li>
                <li><a href ="recettes/desserts/dessert3.html">Dessert 3</a></li>
            </ul>
        </li>
    </ul> -->