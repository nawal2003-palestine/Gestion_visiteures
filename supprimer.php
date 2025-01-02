<?php
$conn = new mysqli('localhost', 'root', '', 'Gestion_visiteurs');
$id = $_GET['id'];

$conn->query("DELETE FROM VISITEURS WHERE ID = $id");

header("Location: Affichage.php");
?>