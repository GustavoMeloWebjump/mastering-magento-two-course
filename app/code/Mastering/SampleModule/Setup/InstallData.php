<?php
namespace Mastering\SampleModule\setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_item'),
            [
                'name' => 'Item 1',
                'description' => 'lorem ipsum'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_item'),
            [
                'name' => 'Item 2',
                'description' => 'lorem ipsum'
            ]
        );

        $setup->endSetup();
    }
}
