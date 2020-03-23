<?php
$page = (isset($_GET["page"]))? $_GET["page"] : "home";
var_dump($page);


switch ($page) {
    
    case "entree":
        $lien = "recettes\Entree.html" ;
        break;
    case "plat":
        $lien = "recettes\plat.html" ;
        break;
    case "dessert":
        $lien = "recettes\dessert.html";
        break;
    default : $lien = "home.html";
}

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
            <?php require "menu.php"?> 
            </nav>
        </header>

        <article>
        <?php require $lien?>
        </article> 
</body>

