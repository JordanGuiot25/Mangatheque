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
    <form method="post" action="protege.php">
        <input name="mdp" type="password" placeholder="Mot de passe">

        <button type="submit">Envoyer</button>
    </form>
    
</body>
</html>