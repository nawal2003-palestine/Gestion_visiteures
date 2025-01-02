<?php
$link = mysqli_connect ('localhost', 'root','', 'Gestion_visiteurs');
list($nom, $prenom, $email) = array_values($_POST);
$req="insert into VISITEURS(nom, prenom, email) values('$nom', '$prenom', '$email')";
$res = mysqli_query($link,$req);
echo $res;
header("location: Affichage.php")
?>