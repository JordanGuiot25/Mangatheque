<?php
    /*
    if($_POST["mdp"] == "123")
    {
        */
    
    include("includes/bdd/config.php");
        
        if (isset($_POST['titre']) and !empty($_POST['description']) and isset($_POST["categorie"]) and isset($_POST["image"])) {
        $titre =  htmlspecialchars($_POST["titre"]);
        $description = htmlspecialchars($_POST["description"]);
        $categorie = htmlspecialchars($_POST["categorie"]);
        $img = htmlspecialchars($_POST["image"]);

        $insert = $bdd->prepare('INSERT INTO manga(titre, categorie, description, img) VALUES (?, ?, ?, ?)');
        $insert->execute(array($titre, $categorie, $description, $img));
    }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin: 0">
		
		<a class="navbar-brand" href="#">Mangatheque</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<a class="nav-link" aria-current="page" href="./index.php">Accueil</a>
		</ul>
		
	
</nav>

    <h1>Page sécurisé</h1>

    <form method="post">
        
        <input name="titre" type="text" placeholder="Titre"><br/>

        <textarea placeholder="Description" name="description" id="" cols="30" rows="10"></textarea><br/>

        <select name="categorie" id="">
            <option name value="shonen">Shonen</option>
            <option value="seinen">Seinen</option>
        </select><br/>

        <input name="image" type="text" placeholder="Image"><br/>
        <button name="valider" type="submit">Ajouter</button>

    </form>
    
</body>
</html>

<?php
    /*
    }
    else 
    {
        header("Location: form.php");
    }
    */
?>