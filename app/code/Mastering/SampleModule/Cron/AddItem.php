<?php
namespace Mastering\SampleModule\Cron;

use Mastering\SampleModule\Model\ItemFactory;
use Mastering\SampleModule\Model\Config;

class AddItem
{

    private ItemFactory $itemFactory;
    private $config;

    public function __construct(ItemFactory $itemFactory, Config $config)
    {
        $this->itemFactory = $itemFactory;
        $this->config = $config;
    }

    public function execute () {
        if ($this->config->isEnabled()) {
            $this->itemFactory->create()
                ->setName('Schedule item')
                ->setDescription('Created at' . time())
                ->save();
        }

    }
}
