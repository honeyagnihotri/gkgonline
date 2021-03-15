<?php
namespace Gkgonline\Quotation\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'gkgonline_quotation_post';

	protected $_cacheTag = 'gkgonline_quotation_post';

	protected $_eventPrefix = 'gkgonline_quotation_post';

	protected function _construct()
	{
		$this->_init('Gkgonline\Quotation\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}