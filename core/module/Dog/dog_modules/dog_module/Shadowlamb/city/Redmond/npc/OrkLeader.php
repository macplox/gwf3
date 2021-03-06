<?php
final class Redmond_OrkLeader extends SR_NPC
{
	public function getNPCPlayerName() { return 'OrkLeader'; }
	public function getNPCLevel() { return 9; }
	public function canNPCMeet(SR_Party $party) { return false; }
	public function getNPCModifiers()
	{
		return array(
			'race' => 'ork',
			'strength' => rand(5, 6),
			'quickness' => rand(1, 2),
			'melee' => rand(2, 3),
			'base_hp' => rand(20, 24),
			'distance' => rand(2, 4),
			'nuyen' => rand(100, 200),
		);
	}
	public function getNPCEquipment()
	{
		return array(
			'weapon' => array('ShortSword', 'LongSword'),
			'armor' => 'LeatherVest',
			'boots' => 'LeatherBoots',
			'helmet' => 'LeatherCap',
			'gloves' => 'SpikeGloves',
			'belt' => 'LeatherBelt',
		);
	}
	public function getNPCLoot(SR_Player $player)
	{
		$quest = SR_Quest::getQuest($player, 'Redmond_Orks');
		if ($quest->isInQuest($player)) {
			return array('Reginalds_Bracelett');
		}
		return array();
	}
}
?>
