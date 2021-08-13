<?php
namespace Mastering\SampleModule\Api\Data;

/**
 * @codeCoverageIgnore
 */
interface ItemInterface
{
    /**
     * @return string
     */
    public function getName();
    /**
     * @return string
     * @codeCoverageIgnore
     */
    public function getDescription();
}
