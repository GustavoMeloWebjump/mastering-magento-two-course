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
                'name' => 'Pipoca',
                'nickname' => 'pipoquinha',
                'breed' => 'siames',
                'age' => 2,
                'name_owner' => 'geovana',
                'type_pet' => 'cat'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_item'),
            [
                'name' => 'Urso',
                'nickname' => 'Urso',
                'breed' => 'Vira-lata',
                'age' => 12,
                'name_owner' => 'Lucas',
                'type_pet' => 'dog'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_item'),
            [
                'name' => 'Jujuba',
                'nickname' => 'Jujubinha',
                'breed' => 'Piriquito',
                'age' => 1,
                'name_owner' => 'Vivian',
                'type_pet' => 'bird'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_item'),
            [
                'name' => 'burefi',
                'nickname' => 'burefi',
                'breed' => 'branco',
                'age' => 3,
                'name_owner' => 'Rafael',
                'type_pet' => 'bunny'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_item'),
            [
                'name' => 'Pulinho',
                'nickname' => 'Pulinho',
                'breed' => 'Persa',
                'age' => 5,
                'name_owner' => 'Richard',
                'type_pet' => 'Cat'
            ]
        );

        $setup->endSetup();
    }
}
