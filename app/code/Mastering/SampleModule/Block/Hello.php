<?php
namespace Mastering\SampleModule\Block;

use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class Hello extends \Magento\Framework\View\Element\Template
{

    private $collectionFactory;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Mastering\SampleModule\Model\Item
     *
     */
    public function getItems () {
        return $this->collectionFactory->create()->getItems();
    }
}
