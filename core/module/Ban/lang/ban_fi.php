<?php
$lang = array(
	# Form Titles
	'ft_add_ban' => 'Kiellä / varoita käyttäjää',
	'fi_add_ban' => ' Anna käyttäjälle Varoitus tai kielto. Jotta voit antaa kiellon, laita ruksi laatikkoon, voit myös valita pysyvän tai tiettyyn ajankohtaan loppuvan kiellon.',

	# Table Headers
	'th_user_name' => 'Käyttäjänimi',		
	'th_ban_msg' => 'Viesti',
	'th_ban_ends' => 'Loppuu',
	'th_ban_perm' => 'Pysyvä',
	'th_ban_type' => 'Tyyppi',
	'th_ban_type2' => 'Kiellä',
	'th_ban_date' => 'Päivä',

	# Tooltips
	'tt_ban_ends' => 'Tarvitaan vain väliaikaiseen kieltoon. Sinun täytyy tarkistaa että Kielto laatikossa on ruksi.',
	'tt_ban_perm' => 'Pysyvä vaitho ehto kumoaa Päättymis ajankohdan',
	'tt_ban_type' => 'Varoita tai Kiellä',

	# Buttons
	'btn_add_ban' => 'Varoita/Kiellä',

	# Errors
	'err_perm_or_date' => 'Valitse päättymis ajankohta, tai laita ruksi kielto laatikkoon.',
	'err_msg' => 'Unohdit Viestin.',
	'err_ends' => 'Päättymis ajankohta ei kelpaa.',

	# Messages
	'msg_permbanned' => 'Käyttäjä %s Kiellettiin pysyvästi.',
	'msg_tempbanned' => 'Käyttäjä %s Kiellettään %s asti.',
	'msg_warned' => 'Käyttäjää %s varoitettiin.',
	'msg_marked_read' => 'Viesti merkitty luetuksi.',
	
	# Info
	'info_warning' => 'Sait varoituksen!<br/>%s<br/><a href="%s">Clickaa luetuksi tästä</a>.',
	'info_tempban' => 'Sinut kielto loppuu %s!<br/>%s',
	'info_permban' => 'Olet kieletty ikuisesti:<br/>%s',

	# Admin Config
	'cfg_ban_ipp' => 'Tavaroita per sivu',

	# Bits
	'type_1' => 'Kielto',
	'type_2' => 'Varoitus',
);
?>