<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfOfferDetails implements IteratorAggregate
{

    /**
     * @property OfferDetails[] $OfferDetails
     */
    protected $OfferDetails = array(
        
    );

    /**
     * @param OfferDetails[] $OfferDetails
     * @return $this
     */
    public function setOfferDetails($OfferDetails)
    {
        $this->OfferDetails = $OfferDetails;
        return $this;
    }

    /**
     * @return OfferDetails[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->OfferDetails );
    }

    /**
     * @return OfferDetails[]
     */
    public function getOfferDetails()
    {
        return $this->OfferDetails;
    }


}

