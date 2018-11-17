<?php

$menu_nom = array ();
$menu_lien = array();
$cptmenu=0;
    
try 
{
    $co = new PDO('mysql:host=localhost;dbname=fotoforyou','adminfoto','AZERTY11');
}
catch (PDOException $e)
{
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

foreach($co->query('SELECT * from menu') as $row) 
{
    $menu_nom[$cptmenu] = $row['nom_menu'];
    $menu_lien[$cptmenu] = $row['lien_menu'];
    $cptmenu++;
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Photo for you</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<!--
sworm, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->