<?php
namespace Mastering\SampleModule\Observer;

use Psr\Log\LoggerInterface;

/**
 * @codeCoverageIgnore
 */
class Logger implements \Magento\Framework\Event\ObserverInterface
{

    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $this->logger->debug(
            $observer->getEvent()->getName()
        );
    }
}
