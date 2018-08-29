<?php 




class Marisson extends Pokemon{


	


	public function __construct(){

		try{

		$bdd = new PDO('mysql:host=localhost;dbname=pokemon;charset=utf8', 'benji', 'aqwsedcft7777');
	}

	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	

			$reponse = $bdd->query('SELECT * FROM pokemon WHERE id=1') ;

			$donnees=$reponse->fetch();

		$this -> pv = $donnees['pv'];
		$this -> type = "herbe";
		$this -> nom = "marisson";
		$this -> attaque1 = "fouet liane";
		$this -> attaque2 = "canon graine";
		$this -> faiblesse = "feu";
		$this -> carte = "marisson.jpeg";

	}

	

	// public function blessure($blessure){
	// 	$this -> pvactuels = $blessure;
	// }


}

?>