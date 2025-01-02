<?php
$conn = new mysqli('localhost', 'root', '', 'Gestion_visiteurs');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("UPDATE VISITEURS SET NOM = ?, PRENOM = ?, EMAIL = ? WHERE ID = ?");
    $stmt->bind_param("sssi", $nom, $prenom, $email, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: Affichage.php");
}
?>