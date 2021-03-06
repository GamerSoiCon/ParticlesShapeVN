<?php

namespace BEcraft\Tasks;

use BEcraft\Loader;
use pocketmine\scheduler\Task;
use pocketmine\level\{Location, Level};
use pocketmine\level\particle\FlameParticle;

class Crown extends Task{
	
	public function __construct(Loader $plugin, Location $location, Level $level){
	//parent::__construct($plugin, $location, $level);
	$this->plugin = $plugin;
	$this->location = $location;
	$this->level = $level;
	}
	
	public function onRun($tick){
	$level = $this->level;
	$location = $this->location;
	$time = 1;
	$pi = 3.14159;
	$time = $time+0.1/$pi;
	for($i = 0; $i <= 2*$pi; $i+=$pi/8){
	$x = $time*cos($i);
	$y = exp(-0.1*$time)*sin($time)+1.5;
	$z = $time*sin($i);
	$level->addParticle(new FlameParticle($location->add($x, $y, $z)));
	}
	}
	
}