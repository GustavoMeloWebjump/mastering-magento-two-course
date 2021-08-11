<?php
namespace Mastering\SampleModule\Test\Unit\Block;

use Magento\Framework\DataObject;
use Mastering\SampleModule\Block\Hello;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;
use Magento\Framework\View\Element\Template\Context;
use Mastering\SampleModule\Model\Item;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;
use Mastering\SampleModule\Model\ResourceModel\Item\Collection;
class HelloTest extends TestCase {

    private $hello;
    private $contextMock;
    private $collectionFactoryMock;
    private $data = [];
    private $collectionMock;

    protected function setUp(): void
    {
        $this->contextMock = $this->createMock(Context::class);
        $this->collectionFactoryMock = $this->createMock(CollectionFactory::class);
        $this->hello = new Hello($this->contextMock, $this->collectionFactoryMock, $this->data);
        $this->collectionMock = $this->createMock(Collection::class);
        $this->itemMock = $this->createMock(Item::class);
    }

    public function testGetItemsShouldReturnArrayWithTwoItems() {


        $this->collectionFactoryMock
            ->expects($this->once())
            ->method('create')
            ->willReturn($this->collectionMock);

        $this->collectionMock->expects($this->once())
            ->method('getItems')
            ->willReturn([1, 2]);

        $this->assertCount(2 ,$this->hello->getItems());

    }

}
