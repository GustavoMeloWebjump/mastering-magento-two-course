<?php
namespace Mastering\SampleModule\Test\Unit\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Mastering\SampleModule\Model\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase {

    private $mockScopeConfigInterface;
    private $config;

    protected function setUp(): void
    {
        $this->mockScopeConfigInterface = $this->createMock(ScopeConfigInterface::class);
        $this->config = new Config($this->mockScopeConfigInterface);
    }

    public function testIsEnabledMustReturnTrue() {
        $this->mockScopeConfigInterface
        ->expects($this->once())
        ->method('getValue')
        ->with(Config::XML_PATH_ENABLED)
        ->willReturn(1);

        $this->assertEquals(1, $this->config->isEnabled());
    }

}
