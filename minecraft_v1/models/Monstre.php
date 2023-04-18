<?php

	require_once 'Personnage.php';

	class Monstre extends Personnage {


		/**
		 * @param int
		 * @return Monstre
		 */ 
		public function __construct($niveau) {

			$this->endurance = $niveau;
			$this->force = $niveau;
			parent::__construct($niveau);

			// echo "]==============< Monstre >==============[".PHP_EOL;
			// echo "Niveau : {$this->niveau}".PHP_EOL;
			// echo "Vie (5x{$this->endurance}) : {$this->pv}".PHP_EOL;
			// echo "Endurance ({$this->niveau}) : {$this->endurance}".PHP_EOL;
			// echo "Force ({$this->niveau}) : {$this->force}".PHP_EOL;
			// echo "Attaque (2x{$this->force}) : {$this->attaque}".PHP_EOL;


		}

	}


?>