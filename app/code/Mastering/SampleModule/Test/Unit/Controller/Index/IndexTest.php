<?php
namespace Mastering\SampleModule\Test\Unit\Controller\Index;

use Mastering\SampleModule\Controller\Index\Index;
use PHPUnit\Framework\TestCase;
use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\Model\View\Result\Page;

class IndexTest extends TestCase {

    private $indexController;
    private $contextMock;
    private $resultPageFactoryMock;
    private $pageMock;

    protected function setUp () : void
    {
        $this->contextMock = $this->createMock(Action\Context::class);
        $this->resultPageFactoryMock = $this->createMock(PageFactory::class);
        $this->pageMock = $this->createMock(Page::class);
        $this->indexController = new Index($this->contextMock, $this->resultPageFactoryMock);
    }

    public function testExecute () {
        $this->resultPageFactoryMock
            ->method('create')
            ->willReturn($this->pageMock);

        $this->assertEquals($this->pageMock, $this->indexController->execute());
    }
}
