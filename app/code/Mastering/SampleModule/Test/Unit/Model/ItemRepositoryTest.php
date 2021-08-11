<?php
namespace Mastering\SampleModule\Test\Unit\Model;

use Mastering\SampleModule\Model\ItemRepository;
use Mastering\SampleModule\Model\ResourceModel\Item\Collection;
use PHPUnit\Framework\TestCase;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;

class ItemRepositoryTest extends TestCase {

    private $itemRepository;
    private $collectionFactoryMock;
    private $collectionMock;

    protected function setUp(): void
    {
        $this->collectionFactoryMock = $this->createMock(CollectionFactory::class);
        $this->itemRepository = new ItemRepository($this->collectionFactoryMock);
        $this->collectionMock = $this->createMock(Collection::class);
    }

    public function testGetListShouldHasItens () {
        $this->collectionFactoryMock
            ->expects($this->once())
            ->method('create')
            ->willReturn($this->collectionMock);

        $this->collectionMock
            ->expects($this->once())
            ->method('getItems')
            ->willReturn([1, 2]);

        $this->assertCount(2, $this->itemRepository->getList());
    }

}
