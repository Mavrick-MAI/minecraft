<?php

	require_once 'models/Joueur.php';
	require_once 'models/Monstre.php';

	$joueur = new Joueur(1);

	$joueur->choisirAdversaire(new Monstre(1));
	$joueur->choisirAdversaire(new Monstre(1));
	$joueur->choisirAdversaire(new Monstre(1));
	$joueur->choisirAdversaire(new Monstre(1));
	$joueur->choisirAdversaire(new Monstre(1));

?>