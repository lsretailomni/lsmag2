<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfVariantRegistration implements IteratorAggregate
{

    /**
     * @property VariantRegistration[] $VariantRegistration
     */
    protected $VariantRegistration = array(
        
    );

    /**
     * @param VariantRegistration[] $VariantRegistration
     * @return $this
     */
    public function setVariantRegistration($VariantRegistration)
    {
        $this->VariantRegistration = $VariantRegistration;
        return $this;
    }

    /**
     * @return VariantRegistration[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->VariantRegistration );
    }

    /**
     * @return VariantRegistration[]
     */
    public function getVariantRegistration()
    {
        return $this->VariantRegistration;
    }


}

