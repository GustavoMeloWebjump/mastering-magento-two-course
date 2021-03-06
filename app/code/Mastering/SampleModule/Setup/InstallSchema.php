<?php
namespace Mastering\SampleModule\setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
/**
 * @codeCoverageIgnore
 */
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
            'Item ID'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Item Name'
        )->addColumn(
            'description',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Item description'
        )->addIndex(
            $setup->getIdxName('mastering_sample_item', ['name']),
            ['name']
        )->setComment(
            'sample items'
        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
