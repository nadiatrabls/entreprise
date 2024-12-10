<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entreprise</title>
</head>
<body>
    <h1>Voici la liste de mes employés</h1>
    <?php
    $connect = mysqli_connect("localhost","root","","entreprise");

    $requete = "SELECT * FROM employes";

   $query = mysqli_query($connect,$requete);
   ?>
  <table border =1>
   
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Action</th>
        
    </tr>
   
    <?php
   while ($row=mysqli_fetch_array($query)){
    $nom= $row['nom'];
    $id= $row['id'];
   $prenom = $row['prenom'];

?> 
    <tr>
        <th><?php echo $nom; ?></th>
        <th><?php echo $prenom; ?></th>
        <th>
                <a href="delete.php?id=<?php echo $id; ?>">Supprimer</a>
         
                <a href="update.php?id=<?php echo $id; ?>">Modifier</a>
        </th>

    </tr>


<?php
}
?>
</table>

<h2>Ajouter un nouvel employé</h2>
    <form action="insert.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
        <label for="age">age :</label>
        <input type="number" id="age" name="age" required><br><br>

        <button type="submit">Ajouter</button>
    </form>
    
</body>
</html>