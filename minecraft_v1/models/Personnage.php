<?php

	abstract class Personnage {

		/**
		 * @var string $niveau
		 */ 
		protected $niveau;

		/**
		 * @var string $experience
		 */ 
		protected $experience;

		/**
		 * @var string $pv
		 */ 
		protected $pv;

		/**
		 * @var string $endurance
		 */ 
		protected $endurance;

		/**
		 * @var string $force
		 */ 
		protected $force;

		/**
		 * @var string $attaque
		 */ 
		protected $attaque;



		/**
		 * @param int
		 * @return Personnage
		 */ 
		public function __construct($niveau) {

			$this->niveau = $niveau;
			$this->pv = 5*$this->endurance;
			$this->attaque = 2*$this->force;

		}

		/**
		 * @return int
		 */ 
		public function getNiveau() {
			return $this->niveau;
		}

		/**
		 * @param int
		 * @return void
		 */ 
		public function setNiveau($niveau) {
			$this->niveau = $niveau;
		}

		/**
		 * @return int
		 */ 
		public function getExperience() {
			return $this->experience;
		}

		/**
		 * @param int
		 * @return void
		 */ 
		public function setExperience($experience) {
			$this->experience = $experience;
		}

		/**
		 * @return int
		 */ 
		public function getPv() {
			return $this->pv;
		}

		/**
		 * @param int
		 * @return void
		 */ 
		public function setPv($pv) {
			$this->pv = $pv;
		}

		/**
		 * @return int
		 */ 
		public function getEndurance() {
			return $this->endurance;
		}

		/**
		 * @param int
		 * @return void
		 */ 
		public function setEndurance($endurance) {
			$this->endurance = $endurance;
		}

		/**
		 * @return int
		 */ 
		public function getForce() {
			return $this->force;
		}

		/**
		 * @param int
		 * @return void
		 */ 
		public function setForce($force) {
			$this->force = $force;
		}

		/**
		 * @return int
		 */ 
		public function getAttaque() {
			return $this->attaque;
		}

		/**
		 * @param int
		 * @return void
		 */ 
		public function setAttaque($attaque) {
			$this->attaque = $attaque;
		}

		/**
		 * @param int
		 * @return void
		 */ 
		public function prendUnCoup($attaqueEnnemi) {
			$this->pv -= $attaqueEnnemi;
		}

	}

?>