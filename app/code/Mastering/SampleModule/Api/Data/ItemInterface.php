<?php
namespace Mastering\SampleModule\Api\Data;

interface ItemInterface
{
    /**
     * @return string
     */
    public function getName();
    /**
     * @return string
     */
    public function getDescription();
}
