<?php

namespace LostTeam;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;	
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener{

public function onEnable(){

  $this->getLogger()->notice("Enabled!");
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
}
  public function onChat(PlayerChatEvent $event){

    $player = $event->getPlayer();
    $heartemoji = "♥";
    $msg = $event->getMessage();
    if($msg === "<3" or "i love you"){
      $event->setMessage($heartemoji);
    }

}
    
