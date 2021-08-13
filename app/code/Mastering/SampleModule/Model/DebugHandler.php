<?php
namespace Mastering\SampleModule\Model;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

/**
 * @codeCoverageIgnore
 */
class DebugHandler extends Base
{
    protected $fileName = '/var/log/debug_custom.log';

    protected $loggerType = Logger::DEBUG;
}
