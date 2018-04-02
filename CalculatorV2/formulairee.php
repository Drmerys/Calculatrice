<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>EditCALC</title>
    </head>
  
    <body>
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <h1>EditCALC</h1>
                </div>
    <div style="text-align:center;">
        
    <?php
    
    $choix= rand(0,1);    

    if ($choix == 1){
    $nombre1=rand(0,9);
    $nombre2= rand(0,9-$nombre1);
    
    }    
    else{
        $nombre1= rand(0,9);
        $nombre2= rand(0,$nombre1);
    }
        
    ?>  
        
        
        <form name="formulaire" method="post" action="calc.php">
            <p>nombre 1  <input name="nombre1" type="int" value="<?php echo $nombre1 ?>"></p>
                <select name="choix">
                    <?php
    
                    if ($choix == 1) {
                    echo "<option value='addition'>+</option>";
                    }
                    else {
                    echo "<option value='soustraction'>-</option>";
                    }
                              
                    ?>    
                </select>
            <p>nombre 2  <input name="nombre2" type="int" value="<?php echo $nombre2 ?>"></p>
        
        <input src="chiffres/chiffre0.gif" type="image" alt="Submit button" name="0" >
        <input src="chiffres/chiffre1.gif" type="image" alt="Submit button" name="1" >
        <input src="chiffres/chiffre2.gif" type="image" alt="Submit button" name="2" >
        <input src="chiffres/chiffre3.gif" type="image" alt="Submit button" name="3" >
        <input src="chiffres/chiffre4.gif" type="image" alt="Submit button" name="4" ><br>
        <input src="chiffres/chiffre5.gif" type="image" alt="Submit button" name="5" >
        <input src="chiffres/chiffre6.gif" type="image" alt="Submit button" name="6" >
        <input src="chiffres/chiffre7.gif" type="image" alt="Submit button" name="7" >
        <input src="chiffres/chiffre8.gif" type="image" alt="Submit button" name="8" >
        <input src="chiffres/chiffre9.gif" type="image" alt="Submit button" name="9" ><br><br>
        </form>
        
        <a href="Pub/Pokemon.mp4" onclick="setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000);"><h1>Quitter</h1></a>
        
        
      
<div>

<body>
<html>
