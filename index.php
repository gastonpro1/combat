<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TP COMBAT </title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

<div class="menu">

<h1> <strong class="yo"> Combat GO </strong> </h1>

</div>
    




<section class="pseudo">
        
<p class="nbperso">Nombre de personnages créés : 0</p>
        
        <form action="classes/PersonnagesManager.php" method="POST">
            <p class="error"> 
                <?php 
                    //afficher l'erreur si elle existe 
                    if(isset($error)) echo $error;
                ?>    
            </p>
            <p class="titi">
        Nom : <input type="text" name="nom" maxlength="10" /> <input type="submit" value="Utiliser ce personnage" name="utiliser" /><br />
        Type :
        <select name="type" class="select">
          <option value="Humain"> Humain </option>
          <option value="Homme-Poisson"> Homme-Poisson </option>
          <option value="Géant"> Géant </option>
          <option value="Minks"> Minks </option>
        </select>
        <input type="submit" value="Créer ce personnage" name="creer" />
           </p>
        </form>
    </section>




</body>

</html>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>