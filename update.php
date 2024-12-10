<?php
$connect = mysqli_connect("localhost", "root", "", "entreprise");

$id = $_GET['id'];
$requete = "SELECT * FROM employes WHERE id = $id";
$result = mysqli_query($connect, $requete);
$row = mysqli_fetch_assoc($result);

if ($_POST) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    $updateQuery = "UPDATE employes SET nom = '$nom', prenom = '$prenom' WHERE id = $id";
    mysqli_query($connect, $updateQuery);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Employé</title>
</head>
<body>
    <h1>Modifier les informations de l'employé</h1>
    <form method="POST" action="">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?php echo $row['nom']; ?>" required>
        <br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" value="<?php echo $row['prenom']; ?>" required>
        <br><br>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
