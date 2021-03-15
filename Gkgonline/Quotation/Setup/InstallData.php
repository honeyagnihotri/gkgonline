<?php

namespace Gkgonline\Quotation\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_postFactory;

	public function __construct(\Gkgonline\Quotation\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
			'name'         => "text1",
			'post_content' => "text2",
			'url_key'      => '/text3',
			'tags'         => 'gkg',
			'status'       => 1
		];
		$post = $this->_postFactory->create();
		$post->addData($data)->save();
	}
}
