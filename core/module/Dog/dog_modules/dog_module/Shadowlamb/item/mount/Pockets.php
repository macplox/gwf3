<?php
class Item_Pockets extends SR_Mount
{
	public function getItemDescription() { return 'Your pockets. Not a very cool equipment.'; }
	public function getItemPrice() { return -1; }
	public function getMountPassengers() { return 1; }
// 	public function getMountLockLevel() { return 0; }
// 	public function getMountTime($eta)
// 	{
// 		$party = $this->getOwner()->getParty();
// 		$bo = Common::clamp($party->getMin('body'), 0) * 0.001;
// 		$st = Common::clamp($party->getMin('strength'), 0) * 0.001;
// 		$qu = Common::clamp($party->getMin('quickness'), 0) * 0.0005;
// 		$perc = 1.00 - $qu - $bo - $st;
// 		$perc = Common::clamp($perc, 0.50, 1.00);
// 		return $eta * $perc;
// 	}

	public function getPocketsTuneup(SR_Player $player)
	{
		$bo = $player->get('body') * 0.02;
		$st = $player->get('strength') * 0.03;
		$qu = $player->get('quickness') * 0.05;
		return $bo + $st + $qu;
	}
	
	public function getItemModifiersA(SR_Player $player)
	{
		return array(
			'tuneup' => $this->getPocketsTuneup($player),
		);
	}
	
}
?>
