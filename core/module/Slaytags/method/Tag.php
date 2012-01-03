<?php
final class Slaytags_Tag extends GWF_Method
{
	public function isLoginRequired() { return true; }
	
	public function execute(GWF_Module $module)
	{
		if (false === ($song = Slay_Song::getByID(Common::getGetString('stid'))))
		{
			return $module->error('err_song');
		}
		
//		if ( (!$song->isPlaying()) || (!$song->recentlyPlayed(5)) )
//		{
//			return $module->error('err_cannot_tag_recent_song');
//		}
		
		if (isset($_POST['doit']))
		{
			return $this->onTag($module, $song).$this->templateTag($module, $song);
		}
		
		return $this->templateTag($module, $song);
	}
	
	private function templateTag(Module_Slaytags $module, Slay_Song $song)
	{
		$user = GWF_Session::getUser();
		$has_tagged = Slay_TagVote::hasVoted($song, $user);
		$may_add_tag = Slay_Tag::mayAddTag($user);
		$form = $this->formTag($module, $song);
		$tVars = array(
			'song' => $song,
			'has_tagged' => $has_tagged,
			'form' => $form->templateY($module->lang('ft_tag')),
			'href_add_tag' => $module->getMethodURL('AddTag', '&stid='.$song->getID()),
		);
		return $module->template('tag.tpl', $tVars);
	}
	
	private function formTag(Module_Slaytags $module, Slay_Song $song)
	{
		$data = array();
		
		$user = GWF_Session::getUser();
		$votes = Slay_TagVote::getVotes($song, $user);
		
		foreach (Slay_Tag::getTagNames() as $tag)
		{
			$checked = in_array($tag, $votes, true);
			$data["tag_$tag"] = array(GWF_Form::CHECKBOX, $checked, $module->lang('tag', array($tag, $song->getVotePercent($tag))));
		}
		
		$data['doit'] = array(GWF_Form::SUBMIT, $module->lang('btn_tag'));
		
		return new GWF_Form($this, $data);
	}
	
	private function onTag(Module_Slaytags $module, Slay_Song $song)
	{
		$form = $this->formTag($module, $song);
		if (false !== ($error = $form->validate($module)))
		{
			return $error;
		}
		
		$tags = array();
		$errors = array();
		
		foreach ($_POST as $k => $v)
		{
			if (Common::startsWith($k, 'tag_'))
			{
				$k = substr($k, 4);
				if (Slay_Tag::getByName($k) === false)
				{
					$errors[] = $module->lang('err_tag_uk');
				}
				else
				{
					$tags[] = $k;
				}
			}
		}
		
		if (count($errors) > 0)
		{
			return GWF_HTML::errorA('Slaytags', $errors);
		}
		
		$user = GWF_Session::getUser();
		
		if (false === Slay_TagVote::clearVotes($song, $user))
		{
			return GWF_HTML::err('ERR_DATABASE', array(__FILE__, __LINE__));
		}
		
		if (false === Slay_TagVote::addVotes($song, $user, $tags))
		{
			return GWF_HTML::err('ERR_DATABASE', array(__FILE__, __LINE__));
		}
		
		if (false === $song->computeTags())
		{
			return GWF_HTML::err('ERR_DATABASE', array(__FILE__, __LINE__));
		}
		
		return $module->message('msg_tagged');
	}
}
?>