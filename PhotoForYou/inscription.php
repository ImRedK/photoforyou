<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

include 'include/top.php';

?>
</head>
<body>
<div id="container">
	<div id="header">
            <h1><a href="index.php">PhotoForYou :</a></h1>
        <h2>Inscription</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
        <ul>
        <?php
        $cpt=0;
        
        while($cpt<$cptmenu)
        {
            ?><li class="start selected"><a href=<?php echo $menu_lien[$cpt]; ?>><?php echo $menu_nom[$cpt]; ?></a></li><?php
            
            $cpt++;
        }
        
        ?>
        </ul>
    </div>
    <div id="body">
        
        <form method="post" action="inscription.php" class="" id="">
    
    <div class="">
        <input type="text" name="prenom" placeholder="Prénom" class="required">
    </div>
    <div class="">
        <input type="text" name="nom" placeholder="Nom" class="required">
    </div>
    <div class="">
        <input type="text" name="pseudo" placeholder="Pseudo" class="required">
    </div>
    <div class="">
        <input type="text" name="typeU" placeholder="Photographe ou Acheteur ?" class="required">
    </div>
    <div class="">
            <input type="email" name="email" placeholder="Mail" class="required">
    </div>
    <div class="">
            <input type="text" name="mdp" placeholder="Mot de Passe" class="required">
    </div>
<button class="border-button border-bt-red" type="submit" id="submit" name="submit">S'inscrire</button>
</form>
        
<?php

// On récupère les champs (voir plus haut)

// On vérifie si les champs sont vides 
if(empty($nom) OR empty($prenom) OR empty($email) OR empty($pseudo) OR empty($mdp) OR empty($typeU)) 
    { 
    echo 'Veuillez entrer toutes les infos.'; 
    } 
// Aucun champ n'est vide, on peut enregistrer dans la table 
else      
    { 
    $db = mysql_connect('localhost', 'login', 'password');  // connexion à la base 
    mysql_select_db('fotoforyou',$db);                  // sélection de la base 
     
    // on regarde si le mail existe déjà pour le type d'utilisateur
    $sql = "SELECT id FROM user WHERE mail_user='$email' and type_user='$type'"; 
    $req = mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());  
    $res = mysql_num_rows($req); 

    if($res!=0)  // si le mail existe déjà, on affiche un message d'erreur 
        { 
        echo '<font color="red">Désolé, mais ce mail existe déjà dans notre base.</font>'; 
        } 
    else  
        {    
        $sql = "INSERT INTO infos_tbl(id, nom, prenom,email, icq, titre, url) VALUES('','$nom','$prenom','$email','$icq','$titre','$url')"; 
        mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());  
         
        // on affiche le résultat pour le visiteur 
        echo 'Vos infos on été ajoutées.'; 
        } 
    mysql_close();  // on ferme la connexion 
    }  
?> 
    	<div class="clear"></div>
    </div>
    <?php

include 'include/bot.php';

?>
    
</div>
</body>
</html>
