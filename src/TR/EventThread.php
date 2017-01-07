<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 07/01/2017
 * Time: 19:03
 */

namespace TR;


use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Server;

class EventThread extends \Thread
{

    public function onJoin(PlayerJoinEvent $event){
        if($event instanceof PlayerJoinEvent){
            $server = Server::getInstance();
            $count = count(Server::getInstance()->getOnlinePlayers());
            $event->setJoinMessage("§e{$event->getPlayer()->getName()} entrou no Jogo ({$count}/{$server->getMaxPlayers()})");
        } else {

        }
    }

}