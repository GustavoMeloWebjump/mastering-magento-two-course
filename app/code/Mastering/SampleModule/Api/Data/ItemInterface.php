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
    public function getNickname();

    /**
     * @return string
     */
    public function getBreed();

    /**
     * @return int
     */
    public function getAge();

    /**
     * @return string
     */
    public function getNameOwner();

    /**
     * @return string
    */
    public function getTypePet();

}
