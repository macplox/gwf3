<?php
final class Item_Booze extends SR_Drink
{
	public function getItemLevel() { return 0; }
	public function getItemWeight() { return 800; }
	public function getLitres() { return 700; }
	public function getItemPrice() { return 39; }
	public function getItemDescription() { return 'A cheap bottle of booze. Alc:40%.'; }
//	public function isItemSellable() { return false; }
	public function onConsume(SR_Player $player)
	{
		$m = array('alc'=>0.1);
		$player->addEffects(new SR_Effect(GWF_Time::ONE_HOUR*1, $m));
		$player->addEffects(new SR_Effect(GWF_Time::ONE_HOUR*2, $m));
		$player->addEffects(new SR_Effect(GWF_Time::ONE_HOUR*3, $m));
		$player->addEffects(new SR_Effect(GWF_Time::ONE_HOUR*4, $m));
		$player->addEffects(new SR_Effect(GWF_Time::ONE_HOUR*5, $m));
		$player->addEffects(new SR_Effect(GWF_Time::ONE_HOUR*6, $m));
		$player->addEffects(new SR_Effect(GWF_Time::ONE_HOUR*7, $m));
		$player->getParty()->notice(sprintf('%s drunk a bottle of booze got alcoholized (+0.7).', $player->getName()));
	}
}
?>