<?php
namespace Mastering\SampleModule\Block;

use Magento\Framework\Event\ManagerInterface;
use Mastering\SampleModule\Model\ConfigLog;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class Hello extends \Magento\Framework\View\Element\Template
{

    private $collectionFactory;
    private $config;
    private $eventManager;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = [],
        ConfigLog $config,
        ManagerInterface $eventManager
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->config = $config;
        $this->eventManager = $eventManager;
        parent::__construct($context, $data);
    }

    /**
     * @return \Mastering\SampleModule\Model\Item
     *
     */
    public function getItems () {

        if ($this->config->isEnabled()) {
            $this->eventManager->dispatch('mastering_sample_item_log');
        }
        return $this->collectionFactory->create()->getItems();
    }
}
