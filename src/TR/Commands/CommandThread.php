<?php

namespace TR\Commands;

use pocketmine\command\CommandSender;
use pocketmine\Server;

class CommandThread extends \Thread
{

    public function execute(CommandSender $sender, $commandLabel, array $args){
        if(isset($args[0])){
            $player = Server::getInstance()->getPlayer($args[0]);
            if($player == null){
                $sender->sendMessage("Offline!");
                return;
            }
            $player->sendMessage("{$sender->getName()} -> oi");
        }
    }

}