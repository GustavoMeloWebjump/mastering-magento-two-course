<?php
namespace Mastering\SampleModule\Model\ResourceModel\Item;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Mastering\SampleModule\Model\Item', 'Mastering\SampleModule\Model\ResourceModel\Item');
    }
}
