<?php
namespace Gkgonline\Quotation\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'gkgonline_quotation_post_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Gkgonline\Quotation\Model\Post', 'Gkgonline\Quotation\Model\ResourceModel\Post');
	}

}