<?php
namespace Mastering\SampleModule\setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup,ModuleContextInterface $context)
    {
        $setup->startSetup();
        $table = $setup->getConnection()->newTable(
            $setup->getTable('mastering_sample_item')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Pet ID'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Pet Name'
        )->addColumn('nickname', Table::TYPE_TEXT, 255, ['nullable' => false], 'Pet Nickname')->addColumn('breed', Table::TYPE_TEXT, 255, ['nullable' => false], 'Pet breed')->addColumn('age', Table::TYPE_INTEGER, 20, ['nullable' => false], 'Pet age')
        ->addColumn('name_owner', Table::TYPE_TEXT, 255, ['nullable' => false], 'Pet owner name')
        ->addColumn('type_pet', Table::TYPE_TEXT, 255, ['nullable' => false], 'Pet type')
        ->addIndex(
            $setup->getIdxName('mastering_sample_item', ['name']),
            ['name']
        )->setComment(
            'sample pets'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
