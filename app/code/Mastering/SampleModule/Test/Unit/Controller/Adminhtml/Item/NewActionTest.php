<?php
namespace Mastering\SampleModule\Test\Unit\Controller\Adminhtml\Item;

use PHPUnit\Framework\TestCase;
use Mastering\SampleModule\Controller\Adminhtml\Item\NewAction;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class TestNewAction extends TestCase {

    private $newActionController;
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
            ->willReturn($this->resultInterfaceMock);

        $this->newActionController = new NewAction($this->contextMock);
    }

    public function testExecuteShouldReturnAResultInterface () {
        $this->assertEquals($this->resultInterfaceMock, $this->newActionController->execute());
    }

}
