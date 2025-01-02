<?php
$conn = new mysqli('localhost', 'root', '', 'Gestion_visiteurs');
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM VISITEURS WHERE ID = $id");
$user = $result->fetch_assoc();
?>
<html>
<center>
<h1>Modifier un utilisateur<h1>
<form action="Modifier.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $user['ID']; ?>">
  <table>
    <tr>
     <td>Nom</td>
     <td><input type:"text" name="nom" value="<?php echo $user['NOM']; ?>"> </td>
    </tr>

    <tr>
     <td>Prénom</td>
     <td><input type:"text" name="prenom" value="<?php echo $user['PRENOM']; ?>"> </td>
    </tr>

    <tr>
     <td>Email</td>
     <td><input type:"text" name="email" value="<?php echo $user['EMAIL']; ?>"> </td>
    </tr>

    <tr>
                <td><input type="submit" value="Envoyer"></td>
                <td><input type="reset" value="Annuler"></td>
            </tr>
  </table>  
   
    
</form>
</center>
</html>
