<?php

namespace LostTeam\ServerEmoji;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;	
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener{

public function onEnable() {
  $this->getLogger()->notice("Enabled!");
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
}
  public function onChat(PlayerChatEvent $event) {
    $player = $event->getPlayer();
    $heartemoji = "♥";
    $msg = $event->getMessage();
    if(strpbrk("<3",strtolower($msg))) {
      $event->setMessage($heartemoji);
    }
}
