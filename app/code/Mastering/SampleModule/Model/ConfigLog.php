<?php

namespace Mastering\SampleModule\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class ConfigLog {
    const XML_PATH_ENABLED = 'mastering/customlog/enablelog';

    private $config;

    public function __construct(ScopeConfigInterface $config) {
        $this->config = $config;
    }

    /**
     *
     *
     * @return boolean
     */
    public function isEnabled()
    {
      //  echo $this->config->getValue(self::XML_PATH_ENABLED);

        return $this->config->getValue(self::XML_PATH_ENABLED);
    }

}

