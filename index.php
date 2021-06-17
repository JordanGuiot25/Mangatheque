-<?php
// On importe la bdd
include("includes/bdd/config.php");

// On créer une variable qui demande à la bdd via une requête SQL les mangas de la categorie "seinen"


$all = $bdd->query("SELECT * FROM manga");

$shonen = $bdd->query("SELECT * FROM manga WHERE categorie='shonen'");
$seinen = $bdd->query("SELECT * FROM manga WHERE categorie='seinen'");

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Ma Mangathèque</title>
		<meta charset="utf-8">
		<meta name="Keyword" lang="fr" content="Mangathèque, DUT, Informatique, Jordan Guiot" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		
	</head>

	<body class="body">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin: 0">
		
			<a class="navbar-brand" href="#">Mangatheque</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<a class="nav-link" aria-current="page" href="./form.php">Ajouter des mangas</a>
			</ul>
			
		
	</nav>
	<h1 class="titre"> Bienvenue dans la mangathèque ! </h1>
	<div class="row">
		<div class="col-md-3 menu">
			<div class="table">
				<h3 id="left"> Catégorie </h3>
				<a class="btn btn-primary" href="categories/shonen.php" role="button">Shonen</a>
				<a class="btn btn-primary" href="categories/seinen.php" role="button">Seinen</a>
			</div>
		</div>
			<div class="col-md-12 text">
				<div class="row">
					<?php while ($s = $all->fetch()) { ?>
						<div class="col-md-4 text">
							<article>
								<h1> <?php echo $s["titre"] ?> </h1>
									<p>
										<?php echo utf8_encode($s["description"]) ?>
									</p>
								<p><img class="illustration" width="150" src="assets/img/<?php echo $s["img"] ?>" alt="illustration"> </p>
							</article>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 text">
			<div class="row">
				
			</div>
		</div>
	</div>
</html>