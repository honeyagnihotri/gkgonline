<?php

namespace Gkgonline\Quotation\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Gkgonline'));
		$this->_eventManager->dispatch('gkgonline_quotation_display_text', ['mp_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}