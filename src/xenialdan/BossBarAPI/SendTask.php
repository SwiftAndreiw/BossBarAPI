<?php

namespace xenialdan\BossBarAPI;

use pocketmine\scheduler\Task;

class SendTask extends Task {

	public function __construct(Main $owner){
		$this->plugin = $owner;
	}

	public function onRun(int $currentTick): void{
		$this->plugin->sendBossBar();
	}

	public function cancel(){
		$this->getHandler()->cancel();
	}
}
