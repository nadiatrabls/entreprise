<?php
    $connect = mysqli_connect("localhost","root","","entreprise");

    $id = $_GET['id'];
    $requete = "DELETE FROM employes WHERE id=$id";
    $query = mysqli_query($connect,$requete);

    header("Location: index.php");