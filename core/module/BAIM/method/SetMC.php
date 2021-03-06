<?php
final class BAIM_SetMC extends GWF_Method
{
	private $row = false;
	
	public function isLoginRequired() { return true; }
	
	public function execute()
	{
		if (false === ($this->row = BAIM_MC::getByUID(GWF_Session::getUserID()))) {
			return $this->module->error('err_not_purchased');
		}
		
		if ($this->row->isDemo()) {
			return $this->module->error('err_not_purchased');
		}
		
//		var_dump($this->row);
		
		$back = '';
		if (false !== Common::getPost('set')) {
			$back = $this->onSetMC($this->row);
		}
		
		return $back.$this->templateMC($this->row);
	}
	
	private function formMC(BAIM_MC $row)
	{
		$data = array(
//			'mc' => array(GWF_Form::STRING, $row->getMC(), $this->module->lang('th_mc'), $this->module->lang('tt_mc')),
			'mc' => array(GWF_Form::VALIDATOR),
			'set' => array(GWF_Form::SUBMIT, $this->module->lang('menu_mc')),
		);
		return new GWF_Form($this, $data);
	}

	private function templateMC(BAIM_MC $row)
	{
		$form = $this->formMC($row);
		$tVars = array(
			'row' => $row,
			'form' => $form->templateY($this->module->lang('ft_set_mc')),
		);
		return $this->module->templatePHP('set_mc.php', $tVars);
	}
	
	public function validate_mc(Module_BAIM $m, $arg)
	{
//		if (!Baim_MC::isValidMC($arg)) {
//			return $m->lang('err_mc');
//		}
		if (!$this->row->canChange()) {
			return $m->lang('err_change_freq', array($this->row->displayNextChange()));
		}
		return false;
	}
	
	private function onSetMC(BAIM_MC $row)
	{
		$form = $this->formMC($row);
		if (false !== ($errors = $form->validate($this->module))) {
			return $errors;
		}
		
//		$mc = $_POST['mc'];
		if (false === $row->changeMC(NULL)) {
			return GWF_HTML::err('ERR_DATABASE', array( __FILE__, __LINE__));
		}
		
		return $this->module->message('msg_set_mc');#, GWF_HTML::display($mc));
	}
}
?>