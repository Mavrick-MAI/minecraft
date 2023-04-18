<?php

	require_once 'Personnage.php';
	require_once 'Monstre.php';

	class Joueur extends Personnage {

		public $nbCombat = 0;

		public $adversaire;

		/**
		 * @param int
		 * @return Joueur
		 */ 
		public function __construct($niveau) {

			$this->endurance = 2*$niveau;
			$this->force = 2*$niveau;
			parent::__construct($niveau);

			// echo "]==============< Joueur >==============[".PHP_EOL;
			// echo "Niveau : {$this->niveau}".PHP_EOL;
			// echo "Vie (5x{$this->endurance}) : {$this->pv}".PHP_EOL;
			// echo "Endurance  (2x{$this->niveau}) : {$this->endurance}".PHP_EOL;
			// echo "Force (2x{$this->niveau}) : {$this->force}".PHP_EOL;
			// echo "Attaque (2x{$this->force}) : {$this->attaque}".PHP_EOL;

		}

		/**
		 * @param Monstre
		 * @return void
		 */
		public function choisirAdversaire($monstre) {

			// Si le monstre a un niveau supérieur au joueur, pas de combat 
			if ($monstre->getNiveau() <= $this->niveau) {
				$this->adversaire = $monstre;
				$this->combattreAdversaire();
			}
			else {
				echo "Le monstre est trop haut niveau pour vous !".PHP_EOL;
			}
		}

		/**
		 * @return void 
		 */
		public function combattreAdversaire() {

			$mechant = $this->adversaire;

			if ($mechant === null) {
				echo "Wallah frère, arrête l'alcool et choisi un méchant !".PHP_EOL;
			} else {

			$this->nbCombat++;
			$manche = 1;
				
			echo "================== Début du combat {$this->nbCombat} ! ==================".PHP_EOL;

			echo PHP_EOL;

			while (true) {
				
				echo "================== Manche {$manche} ===========================".PHP_EOL;
				echo PHP_EOL;
				echo "                   Tour du joueur                      ".PHP_EOL;
				echo PHP_EOL;

				$mechant->prendUnCoup($this->getAttaque());

				echo "Le monstre perd {$this->getAttaque()} PV.".PHP_EOL;

				echo PHP_EOL;

				if ($mechant->getPv() <= 0) {
					break;
				}
				
				echo "                   Tour du monstre                     ".PHP_EOL;

				echo PHP_EOL;

				$this->prendUnCoup($mechant->getAttaque());

				echo "Le joueur perd {$mechant->getAttaque()} PV.".PHP_EOL;

				echo PHP_EOL;

				if ($mechant->getPv() <= 0) {
					break;
				}

				$manche++;

			}
				
			echo "=======================================================".PHP_EOL;

			echo PHP_EOL;

			if ($this->pv <= 0) {
				echo "STAY BRONZE NUHB !".PHP_EOL;

				echo PHP_EOL;
			} else {
				echo "GG EZ !".PHP_EOL;

				echo PHP_EOL;
			}

			}

		}

	}


?>
