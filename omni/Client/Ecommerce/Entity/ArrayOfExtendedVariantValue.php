<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfExtendedVariantValue implements IteratorAggregate
{

    /**
     * @property ExtendedVariantValue[] $ExtendedVariantValue
     */
    protected $ExtendedVariantValue = array(
        
    );

    /**
     * @param ExtendedVariantValue[] $ExtendedVariantValue
     * @return $this
     */
    public function setExtendedVariantValue($ExtendedVariantValue)
    {
        $this->ExtendedVariantValue = $ExtendedVariantValue;
        return $this;
    }

    /**
     * @return ExtendedVariantValue[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->ExtendedVariantValue );
    }

    /**
     * @return ExtendedVariantValue[]
     */
    public function getExtendedVariantValue()
    {
        return $this->ExtendedVariantValue;
    }


}
