<?php
$connect = mysqli_connect("localhost", "root", "", "entreprise");


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$requete= "INSERT INTO employes (nom, prenom, age) VALUES ('$nom', '$prenom', '$age')";
mysqli_query($connect,$requete);

header("Location: index.php");

