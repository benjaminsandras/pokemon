<?php 
class Grenousse extends Pokemon{


	public function __construct(){

		try{

		$bdd = new PDO('mysql:host=localhost;dbname=pokemon;charset=utf8', 'benji', 'aqwsedcft7777');
	}

	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	$reponse = $bdd->query('SELECT * FROM pokemon WHERE id=2') ;

			$donnees=$reponse->fetch();


		$this -> pv = $donnees['pv'];
		$this -> type = "eau";
		$this -> nom = "grenousse";
		$this -> attaque1 = "ecras'face";
		$this -> attaque2 = "goutte à goutte";
		$this -> faiblesse = "herbe";
		$this -> carte = "grenousse.jpeg";

	}


}

?>