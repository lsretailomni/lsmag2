<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

class ImageSize
{

    /**
     * @property int $Height
     */
    protected $Height = null;

    /**
     * @property int $Width
     */
    protected $Width = null;

    /**
     * @param int $Height
     * @return $this
     */
    public function setHeight($Height)
    {
        $this->Height = $Height;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param int $Width
     * @return $this
     */
    public function setWidth($Width)
    {
        $this->Width = $Width;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->Width;
    }


}

