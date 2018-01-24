<?php

	class Character {
		
		protected $stats = array(
			"hp"=> 300,
			"hp_max" => 300,
			"apt" => 300,
			"apt_max" => 300,
			"str" => 10,
			"spd" => 10,
			"int" => 10,
			"att_type" => "melee",
			"dodge" => 0.5,
			"arm" => 50,
			"mr" => 50,
			"role" => "char"
		);
		protected $inv = [];
		protected $equip = [];
		protected $skills = array(
						'Magus'=>array("soin"=>1, "fireBall"=>1),
						'Tank'=>array("ironSkin"=>1),
						'Combatant'=>array("slash"=>1),
						'Archer'=>array("headShot"=>1),
						'Assassin'=>array("execute"=>1),
						'Thief'=>array("pickpocketing"=>1)
						);
		
		public function __construct($hp, $apt, $strength, $speed, $int, $dodge, $arm, $mr, $att_type, $role) {
			$this->stats["hp"] = $hp;
			$this->stats["apt"] = $apt;
			$this->stats["hp_max"] = $hp;
			$this->stats["apt_max"] = $apt;
			$this->stats["str"] = $strength;
			$this->stats["spd"] = $speed;
			$this->stats["int"] = $int;
			$this->stats["dodge"] = $dodge;
			$this->stats["arm"] = $arm;
			$this->stats["mr"] = $mr;
			$this->stats["role"] = $role;
			$this->stats["att_type"] = $att_type;
		}		
		
		public function getStats() {
			return $this->stats;
		}
		
		public function getSkills() {
			return $this->skills;
		}
		
		public function openInventory() {
			
		}
		
		public function openEquipement() {
			
		}
		
		public function openStats() {
			
		}
		
		public function competence() {
			
		}
		
		public function openChest($chestContent) {
			
		}
		
		public function move($way) {
			
		}
		
		public function attack($cible) {
			
		}
		
	}
?>