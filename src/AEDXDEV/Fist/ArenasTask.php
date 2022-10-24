<?php

namespace AEDXDEV\Fist;

use pocketmine\scheduler\Task;

class ArenasTask extends Task {
	
	/** @var Main */
	private $plugin;
	
	public function __construct(Main $plugin){
		$this->plugin = $plugin;
	}
	
	public function onRun(): void{
		foreach ($this->plugin->getArenas() as $arena){
			$arena->tick();
		}
	}
}
