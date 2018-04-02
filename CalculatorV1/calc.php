<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>EditCALC</title>
</head>
<body >
    
<div id="bloc_page">
            <header>
                <div id="titre_principal">
                </div>
    <div style="text-align:center;">

<?php
if(isset($_POST['nombre1']) AND isset($_POST['choix']) AND isset($_POST['nombre2'])) // Si les varaibles existent ...
{
    //print_r($_POST);

    
    
    
    $nombre1 =htmlspecialchars($_POST['nombre1']); // On sécurise ...
    $choix = htmlspecialchars($_POST['choix']);
    $nombre2 = htmlspecialchars($_POST['nombre2']);
    
  
    if($choix == 'addition')
    {
    $resultat = $nombre1 + $nombre2;
    echo 'Le résultat était '. $resultat;
    echo "<br>" ;
    echo "<br>" ;
    }  
    if($choix == 'soustraction') // Si on a choisi la soustraction, on calcul la différence.
    {
    $resultat = $nombre1 - $nombre2; // On calcul
    echo 'le résultat était '. $resultat;// Puis on affiche
    echo "<br>" ;
    echo "<br>" ;
    } 
    

        switch ($resultat) {
                
        case 0:
            echo '<img src="Images/zero.jpg" alt="Image_un">';
            break;
                
        case 1:
            echo '<img src="Images/Un.JPG" alt="Image_un">';
            break;

        case 2:
            echo '<img src="Images/deux.JPG" alt="Image_un">';
            break;

        case 3:
            echo '<img src="Images/trois.JPG" alt="Image_un">';
            break;

        case 4:
            echo '<img src="Images/Quatre.JPG" alt="Image_un">';
            break;

        case 5:
            echo '<img src="Images/Cinq.JPG" alt="Image_un">';
            break;

        case 6:
            echo '<img src="Images/Six.JPG" alt="Image_un">';
            break;

        case 7:
            echo '<img src="Images/Sept.JPG" alt="Image_un">';
            break;

        case 8:
            echo '<img src="Images/Huit.JPG" alt="Image_un">';
            break;

        case 9:
            echo '<img src="Images/Neuf.JPG" alt="Image_un">';
            break;

        case 10:
            echo '<img src="Images/Dix.JPG" alt="Image_un">';
            break;
        
        default:
            # code...
            break;
        }

        
    
    
    
}
?>



<!--<button onclick="closeWin()"> Quitter</button>

<script>
var Quitter;


function closeWin() {
    Quitter.close();
}
</script> -->

<!--<SCRIPT LANGUAGE="JavaScript">    
    
<a href="Pub/Pokemon.mp4" onclick="setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000);">Quitter</a>


</SCRIPT> -->

</div>

</body>

</html>


