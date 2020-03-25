<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$selection = $_POST['selection'];
$note = $_POST['note'];
$commentaire = $_POST['commentaire'];
$newsletter = isset($_POST['newsletter'])? "Accepte la newsletter" : "N'accepte pas la newsletter" ;

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
        <header>
            <nav class="menu">
            <?php require "menu.php"?> 
            </nav>
        </header>

       
    <body>

<p>Voici les données transmises par le formulaire sur le site internet</p>

<section class="row bg-light">
    <div class="col-6">
            <table>
                <tr>
                    <td>Nom</td>
                    <td>Prenom </td>
                    <td>Adresse mail </td>
                    <td>Selection </td>
                    <td>Note </td>
                    <td>Commentaire</td>
                    <td>Newsletter </td>
                </tr>
                <tr>
                        <td><?php echo $nom?></td>
                        <td><?php echo $prenom?></td>
                        <td><?php echo $mail?></td>
                        <td><?php echo $selection?></td>
                        <td><?php echo $note?></td>
                        <td><?php echo $commentaire?></td>
                        <td><?php echo $newsletter?></td>
                </tr>
            </table>
    </div>
</section>
    </body>
</html>