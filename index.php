<?php ini_set('display_errors', 1); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<?php 

	require("pokemon.class.php");





	try{

		$bdd = new PDO('mysql:host=localhost;dbname=pokemon;charset=utf8', 'benji', 'aqwsedcft7777');
	}

	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}


	$reponse = $bdd->query('SELECT * FROM pokemon WHERE id=1') ;
	$donnees=$reponse->fetch();
	$marisson = new Pokemon($donnees['pv'],$donnees['type'],$donnees['nom'],$donnees['attaque1'],$donnees['attaque2'],$donnees['faiblesse'],'marisson.jpeg');

	$reponse = $bdd->query('SELECT * FROM pokemon WHERE id=2') ;
	$donnees=$reponse->fetch();
	$grenousse = new Pokemon($donnees['pv'],$donnees['type'],$donnees['nom'],$donnees['attaque1'],$donnees['attaque2'],$donnees['faiblesse'],'grenousse.jpeg');

	$reponse = $bdd->query('SELECT * FROM pokemon WHERE id=3') ;
	$donnees=$reponse->fetch();
	$feunnec = new Pokemon($donnees['pv'],$donnees['type'],$donnees['nom'],$donnees['attaque1'],$donnees['attaque2'],$donnees['faiblesse'],'feunnec.jpeg');


	// '<div class = "border">' . $marisson -> afficher() . '</div>
	// <div class = "border">' . $feunnec -> afficher() . '</div>
	// <div class = "border">' . $grenousse -> afficher() . '</div>';

	if(isset($_GET["rejouer"])){

		$pv = 60;

		$query  = "UPDATE pokemon SET
		pv =" . $pv
		;

		$bdd->query($query);


		header('Location: index.php');

	}







	if(isset($_GET["marisson"]) && isset($_GET["grenousse"])){

		$mar = $_GET['inputm'];
		$gre = $_GET['inputg'];

		$query  = "UPDATE pokemon SET
		pv =" . $pv
		;

		$bdd->query($query);


		header('Location: index.php');

	}


	?>

	<div>
		<?php 
		echo $marisson -> afficher();

		?>
		<form>
			<button type="submit" name="att1m">att1</button>
			<button type="submit" name="att2m">att2</button>
		</form>


	</div>

	<div>
		<?php 
		echo $grenousse -> afficher();

		?>
		<form>
			<button type="submit" name="att1g">att1</button>
			<button type="submit" name="att2g">att2</button>
		</form>


	</div>

	<div>
		<?php 
		echo $feunnec -> afficher();

		?>

		<form>
			<button type="submit" name="att1f">att1</button>
			<button type="submit" name="att2f">att2</button>
		</form>

	</div>



	<form metho="GET" action="index.php">
		<button name="rejouer" type="submit">REJOUER</button>
	</form>

	<form method="GET">
		<button class="choix" type="submit" name="marisson"><?php print '<img class="imgchoix" src="' . 'marisson.jpeg' . '" >' ?></button><input class="inputid" name="inputm" value= <?php print $marisson-> nom  ?> >
	</form>
	<form method="GET">
		<button class="choix" type="submit" name="feunnec"><?php print '<img class="imgchoix" src="' . 'feunnec.jpeg' . '" >' ?></button><input class="inputid" name="inputf" value= <?php print $feunnec-> nom  ?> >
	</form>
	<form method="GET">
		<button class="choix" type="submit" name="grenousse"><?php print '<img class="imgchoix" src="' . 'grenousse.jpeg' . '" >' ?></button><input class="inputid" name="inputg" value= <?php print $grenousse-> nom ?> >
	</form>



</body>
</html>

















<!-- if(isset($_GET["att1"])){

		$marisson -> att1($grenousse);

		$pv = $grenousse -> pv;

		$query  = "UPDATE pokemon SET
		pv = '".$pv."'
		WHERE nom    = 'grenousse'";

		$bdd->query($query);

		header('Location: index.php');

	}

	elseif(isset($_GET["att2"])){
		
		$marisson -> att2($grenousse);

		$pv = $grenousse -> pv;

		$query  = "UPDATE pokemon SET
		pv = '".$pv."'
		WHERE nom    = 'grenousse'";

		$bdd->query($query);


		header('Location: index.php');


	} -->