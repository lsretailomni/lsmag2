<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfReplAttribute implements IteratorAggregate
{

    /**
     * @property ReplAttribute[] $ReplAttribute
     */
    protected $ReplAttribute = array(
        
    );

    /**
     * @param ReplAttribute[] $ReplAttribute
     * @return $this
     */
    public function setReplAttribute($ReplAttribute)
    {
        $this->ReplAttribute = $ReplAttribute;
        return $this;
    }

    /**
     * @return ReplAttribute[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->ReplAttribute );
    }

    /**
     * @return ReplAttribute[]
     */
    public function getReplAttribute()
    {
        return $this->ReplAttribute;
    }


}

