<?php
session_start();
include("config.php");

$libelle = $_POST['libelle'];
$prix = $_POST['prix'];
$qte = $_POST['qte'];
$cat = $_POST['cat'];

$requete = "INSERT IGNORE INTO `produit` (`libelle`, `qte`, `prix`, `id_cat`) VALUES ('?', '?', '?', '?')";
// $requete = "INSERT IGNORE INTO `produit` (`libelle`, `qte`, `prix`, `id_cat`) VALUES ($libelle , $qte, $prix, $cat)";
$resultat = $connect->prepare($requete);
 $resultat->execute([$libelle, $qte, $prix, $cat]) ;
// $resultat->execute();
?>




<?php header("Location: ajouterpd.php"); ?>