<?php 

class Pokemon {

	public $pv;
	public $type;
	public $nom;
	public $attaque1;
	public $attaque2;
	public $faiblesse;
	public $carte;



	public function __construct($pv,$type,$nom,$attaque1,$attaque2,$faiblesse,$carte){

		$this -> pv = $pv;
		$this -> type = $type;
		$this -> nom = $nom;
		$this -> attaque1 = $attaque1;
		$this -> attaque2 = $attaque2;
		$this -> faiblesse = $faiblesse;
		$this -> carte = $carte;


	}

	public function afficher(){

		

		if( $this->pv > 0 )
		{
			print '<div><img class="poke" src="' . $this->carte . '" >' . $this->pv. '</div>';

		}
		else{
			print '<div>' . $this->nom . ' est ' . ' mort</div>';
		}
		
	}

	public function att1(Pokemon $pokatt){

		if( $this-> type == "herbe" && $pokatt-> faiblesse == "herbe" || $this-> type == "eau" && $pokatt-> faiblesse == "eau" || $this-> type == "feu" && $pokatt-> faiblesse == "feu"){

			$pokatt -> pv = $pokatt -> pv - $this-> attaque1 *2;
		}
		else{
			$pokatt -> pv = $pokatt -> pv - $this-> attaque1;
		}
	}

	public function att2(Pokemon $pokatt){

		if( $this-> type == "herbe" && $pokatt-> faiblesse == "herbe" || $this-> type == "eau" && $pokatt-> faiblesse == "eau" || $this-> type == "feu" && $pokatt-> faiblesse == "feu"){

			$pokatt -> pv = $pokatt -> pv - $this-> attaque2 *2;
		}
		else{
			$pokatt -> pv = $pokatt -> pv - $this-> attaque2;
		}


	}





}

?>