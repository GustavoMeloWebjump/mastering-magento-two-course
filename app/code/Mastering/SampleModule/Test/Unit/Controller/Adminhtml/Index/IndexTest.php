<?php
namespace Mastering\SampleModule\Test\Unit\Controller\Adminhtml\Index;

use Mastering\SampleModule\Controller\Adminhtml\Index\Index;
use PHPUnit\Framework\TestCase;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class IndexTest extends TestCase {

    private $indexController;
    private $contextMock;
    private $resultFactoryMock;
    private $resultInterfaceMock;

    protected function setUp(): void
    {
        $this->contextMock = $this->createMock(Context::class);
        $this->resultFactoryMock = $this->createMock(ResultFactory::class);
        $this->resultInterfaceMock = $this->createMock(ResultInterface::class);

        $this->contextMock
            ->method('getResultFactory')
            ->willReturn($this->resultFactoryMock);

        $this->resultFactoryMock
            ->method('create')
            ->with(ResultFactory::TYPE_PAGE)
            ->willReturn($this->resultInterfaceMock);


        $this->indexController = new Index($this->contextMock);

    }

    public function testExecuteShouldReturnAResultInterface () {
        $this->assertEquals($this->resultInterfaceMock, $this->indexController->execute());

    }

}
