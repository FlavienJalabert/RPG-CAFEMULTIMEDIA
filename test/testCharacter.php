<?php
	require_once('../src/personnage.php');

	//         __construct($hp, $apt, $strength, $speed, $int, $dodge, $arm, $mr, $att_type; $role)
	$combatant = new Character(100, 500, 2, 5, 20, 0.3, 50, 50,  "melee", "Combatant");
	$assassin = new Character(80, 150, 20, 8, 10, 0.7, 50, 30,  "melee", "Assassin");
	$archer = new Character(100, 500, 2, 5, 20, 0.3, 50, 50,  "range", "Archer");
	$thief = new Character(100, 500, 2, 5, 20, 0.3, 50, 50,  "melee", "Thief");
	$magus = new Character(100, 500, 2, 5, 20, 0.3, 50, 50,  "range", "Magus");
	$tank = new Character(100, 500, 2, 5, 20, 0.3, 50, 50,  "melee", "Tank");
	
	var_dump($combatant->getStats());
	var_dump($assassin->getStats());
	var_dump($archer->getStats());
	var_dump($thief->getStats());
	var_dump($magus->getStats());
	var_dump($tank->getStats());

?>