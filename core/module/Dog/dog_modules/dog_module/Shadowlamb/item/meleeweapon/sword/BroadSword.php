<?php
final class Item_BroadSword extends SR_Sword
{
	public function getAttackTime() { return 30; }
	public function getItemLevel() { return 6; }
	public function getItemWeight() { return 950; }
	public function getItemPrice() { return 625; }
	public function getItemDescription() { return 'A broad steel sword.'; }
	public function getItemModifiersA(SR_Player $player)
	{
		return array(
			'attack' => 5.5, 
			'min_dmg' => 2.0,
			'max_dmg' => 9.0,
		);
	}
	
}
?>