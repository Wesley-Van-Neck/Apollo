<?php

/*
Test
*/

namespace pocketmine\level\generator\normal\biome;

use pocketmine\level\generator\normal\populator\Cactus;
use pocketmine\level\generator\normal\populator\DeadBush;

class BeachBiome extends SandyBiome{

	public function __construct(){
		parent::__construct();

		$this->removePopulator(new Cactus());
		$this->removePopulator(new DeadBush());

		$this->addPopulator($sugarcane);
		$this->temperature = 0.80;
		$this->rainfall = 0.00;

		$this->setElevation(62, 66);
	}
	public function getName() : string{
		return "Beach";
	}
}
