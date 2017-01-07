<?php

namespace TR;

use pocketmine\event\player\PlayerJoinEvent;

use TR\Commands\Commands;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Loader extends PluginBase implements Listener
{

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);

        $commands = [
            new Commands($this),
        ];

        $this->getServer()->getCommandMap()->registerAll("TutorialReturn", $commands);

    }

    public function onJoin(PlayerJoinEvent $event){
        $a = new EventThread();
        $a->onJoin($event);
    }

}