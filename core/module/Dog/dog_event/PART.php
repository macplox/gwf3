<?php # :gizmore!gizmore@localhost PART #sr :"Once you know what it is you want to be true, instinct is a very useful device for enabling you to know that it is"
$msg = Dog::getIRCMsg();
$serv = Dog::getServer();
$user = Dog::setupUser();
$chan_name = $msg->getArg(0);
#$quit_msg = $msg->getArg(1);
$chan = Dog::setupChannel();
if (Dog::isItself())
{
	$serv->removeChannel($chan);
}
else
{
	if ($chan instanceof Dog_Channel && $user instanceof Dog_User)
	{
		$chan->removeUser($user);		
	}
}
