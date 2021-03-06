<?php
final class Hideout_Bathroom extends SR_Location
{
	public function getAreaSize() { return 6; }
	public function getFoundPercentage() { return 100; }
	
// 	public function getFoundText(SR_Player $player) { return 'You locate the bathroom.'; }
// 	public function getEnterText(SR_Player $player) { return 'You enter the bathroom and surprise a punk taking a crap.'; }
	public function getFoundText(SR_Player $player) { return $this->lang($player, 'found'); }
	public function getEnterText(SR_Player $player) { return $this->lang($player, 'enter'); }
	
	public function onEnter(SR_Player $player)
	{
		parent::onEnter($player);
		$party = $player->getParty();
		SR_NPC::createEnemyParty('Redmond_Cyberpunk')->fight($party, true);
	}
	
	public function getCommands(SR_Player $player) { return array('flush'); }
	
	public function on_flush(SR_Player $player, array $args)
	{
		return $this->partyMessage($player, 'flushed', array($player->displayName()));
// 		$p = $player->getParty();
// 		$p->notice(sprintf('%s flushed the toilet.', $player->displayName()));
// 		return true;
	}
}
?>
