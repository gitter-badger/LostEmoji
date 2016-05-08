<?php
namespace LostTeam;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;	
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase implements Listener {
  public $Cfg;
  public function onEnable() {
    $this->getCfg();
    $this->getServer()->getLogger()->notice(TF::GREEN."Enabled!");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function getCfg() {
    $this->saveDefaultConfig();
    $this->Cfg = $this->getConfig();
  }
  public function onChat(PlayerChatEvent $event) {
    $player = $event->getPlayer();
    $heartemoji = "♥";
    $msg = $event->getMessage();
    if(strpbrk("<3",strtolower($msg))) {
      $event->setMessage($heartemoji);
    }
  }
}
