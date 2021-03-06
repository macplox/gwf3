<?php
final class Chicago_Arena extends SR_Arena
{
	public function getFoundPercentage() { return 5.0; }
	public function getFoundText(SR_Player $player) { return $this->lang($player, 'found'); }
	public function getEnterText(SR_Player $player) { return $this->lang($player, 'enter'); }
	
	public function getNPCS(SR_Player $player) { return array('talk' => 'Chicago_ArenaGuy'); }
	
	public function getCommands(SR_Player $player) { return array('view', 'buy', 'challenge'); }
	
	public function getArenaEnemies(SR_Player $player)
	{
		return array(
			array(0x01, 'Chicago_ASmallDrone',  'A small combat drone.', 250),
			array(0x02, 'Chicago_AMediumDrone', 'A medium combat drone.', 500),
			array(0x04, 'Chicago_ALargeDrone',  'A large combat drone.', 2000),
			array(0x08, 'Chicago_AKillBot',     'A military comabat drone.', 5000),
		);
	}
	
	public function getStoreItems(SR_Player $player)
	{
		return array(
			array('KnightsSword', 100.0, 11900),
			array('KnightsArmor', 100.0, 52000),
			array('ChainLegs', 100.0, 9500),
			array('ChainBody', 100.0, 41000),
			array('ChainHelmet', 100.0, 13500),
		);
	}
}
?>