<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfDimValue implements IteratorAggregate
{

    /**
     * @property DimValue[] $DimValue
     */
    protected $DimValue = [
        
    ];

    /**
     * @param DimValue[] $DimValue
     * @return $this
     */
    public function setDimValue($DimValue)
    {
        $this->DimValue = $DimValue;
        return $this;
    }

    /**
     * @return DimValue[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->DimValue );
    }

    /**
     * @return DimValue[]
     */
    public function getDimValue()
    {
        return $this->DimValue;
    }


}

