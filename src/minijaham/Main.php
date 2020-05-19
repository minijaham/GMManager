<?php

namespace minijaham;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;

class Main extends PluginBase {
    public function onEnable() {
        $this->getLogger()->info(TextFormat::GREEN . "Enabled");
    }
    public function onDisable() {
        $this->getLogger()->info(TextFormat::RED . "Disabled");
    }
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
        switch($cmd->getName()) {
            case "gmc":
                if (!$sender->hasPermission("gm.gmc")) {
                    $sender->sendMessage(TextFormat::RED . "No Permission");
                    return true;
                }
                if (isset($args[0])) {
                    if (!$sender->hasPermission("gm.gmc.other")) {
                        $sender->sendMessage(TextFormat::RED . "No Permission");
                        return true;
                    }
                    $player = $this->getServer()->getPlayer($args[0]);
                    if (!$player == null) {
                        $sender->sendMessage(TextFormat::RED . "Player not found");
                        return true;
                    }
                    $player->setGamemode(1);
                    $player->sendMessage("§7(§a!§7)§a Gamemode set to Creative");
                    $sender->sendMessage(TextFormat::GREEN . "Set " . $player->getName() . " To Creative");
                    return true;
                }
                $sender->setGamemode(1);
                $sender->sendMessage("§7(§a!§7)§a Gamemode set to Creative");
                return true;
            break;
            case "gms":
                if (!$sender->hasPermission("gm.gms")){
                    $sender->sendMessage(TextFormat::RED . "No Permission");
                    return true;
                }
                if (isset($args[0])) {
                    if (!$sender->hasPermission("gm.gms.other")){
                        $sender->sendMessage(TextFormat::RED . "No Permission");
                        return true;
                    }
                    $player = $this->getServer()->getPlayer($args[0]);
                    if (!$player == null){
                        $sender->sendMessage(TextFormat::RED . "Player not found");
                        return true;
                    }
                    $player->setGamemode(0);
                    $player->sendMessage("§7(§a!§7)§a Gamemode set to Survival");
                    $sender->sendMessage(TextFormat::GREEN . "Set " . $player->getName() . " To Survival");
                    return true;
                }
                $sender->setGamemode(0);
                $sender->sendMessage("§7(§a!§7)§a Gamemode set to Survival");
                return true;
            break;
            case "gma":
                if (!$sender->hasPermission("gm.gma")){
                    $sender->sendMessage(TextFormat::RED . "No Permission");
                    return true;
                }
                if (isset($args[0])) {
                    if (!$sender->hasPermission("gm.gma.other")){
                        $sender->sendMessage(TextFormat::RED . "No Permission");
                        return true;
                    }
                    $player = $this->getServer()->getPlayer($args[0]);
                    if (!$player == null){
                        $sender->sendMessage(TextFormat::RED . "Player not found");
                        return true;
                    }
                    $player->setGamemode(2);
                    $player->sendMessage("§7(§a!§7)§a Gamemode set to Adventure");
                    $sender->sendMessage(TextFormat::GREEN . "Set " . $player->getName() . " To Adventure");
                    return true;
                }
                $sender->setGamemode(2);
                $sender->sendMessage("§7(§a!§7)§a Gamemode set to Adventure");
                return true;
            break;
            case "gmv":
                if (!$sender->hasPermission("gm.gmv")){
                    $sender->sendMessage(TextFormat::RED . "No Permission");
                    return true;
                }
                if (isset($args[0])) {
                    if (!$sender->hasPermission("gm.gmv.other")){
                        $sender->sendMessage(TextFormat::RED . "No Permission");
                        return true;
                    }
                    $player = $this->getServer()->getPlayer($args[0]);
                    if (!$player == null){
                        $sender->sendMessage(TextFormat::RED . "Player not found");
                        return true;
                    }
                    $player->setGamemode(3);
                    $player->sendMessage("§7(§a!§7)§a Gamemode set to Spectator");
                    $sender->sendMessage(TextFormat::GREEN . "Set " . $player->getName() . " To Spectator");
                    return true;
                }
                $sender->setGamemode(3);
                $sender->sendMessage("§7(§a!§7)§a Gamemode set to Spectator");
                return true;
            break;
        }
    }
}
