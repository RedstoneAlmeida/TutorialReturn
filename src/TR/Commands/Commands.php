<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 07/01/2017
 * Time: 19:12
 */

namespace TR\Commands;


use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use TR\Loader;

class Commands extends Command
{

    protected $plugin;

    public function __construct(Loader $plugin)
    {
        $this->plugin = $plugin;
        parent::__construct("tutorialr", "description");
    }

    public function execute(CommandSender $sender, $commandLabel, array $args)
    {
        $a = new CommandThread();
        $a->execute($sender, $commandLabel, $args);
    }

}