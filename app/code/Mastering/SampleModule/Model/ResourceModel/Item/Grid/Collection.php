<?php
namespace Mastering\SampleModule\Model\ResourceModel\Item\Grid;

use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactory;
use Magento\Framework\Event\ManagerInterface;
use Psr\Log\LoggerInterface as Logger;

/**
 * @codeCoverageIgnore
 */
class Collection extends \Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult {
    public function __construct(EntityFactory $entityFactory, Logger $logger,
        FetchStrategy $fetchStrategy,
        ManagerInterface $managerInterface,
        $mainTable="mastering_sample_item",
        $resourceModel = "Mastering\SampleModule\Model\ResourceModel\Item") {
        parent::__construct($entityFactory,
            $logger,
            $fetchStrategy,
            $managerInterface,
            $mainTable,
            $resourceModel);
    }
}
