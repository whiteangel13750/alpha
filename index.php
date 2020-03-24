<?php
$page = (isset($_GET["page"]))? $_GET["page"] : "home";
// var_dump($page);

switch ($page) {
    
    case "home":
        $include = "home.html";
        break;
    case "entree":
        $include = "recettes/entree.html";
        break;
    case "plat":
        $include = "recettes/plat.html";
        break;
    case "dessert":
        $include = "recettes/dessert.html";
        break;
    case "entrees":
            $include = "entrees.php";
            break;
    case "plats":
            $include = "plats.php";
            break;
    case "desserts":
        $include = "desserts.php";
        break;
    
    default : $include = "recettes/home.html";
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
        <?php require $include?>
        </article> 
</body>

