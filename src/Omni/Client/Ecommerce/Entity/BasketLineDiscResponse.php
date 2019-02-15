<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\Ecommerce\Entity\Enum\DiscountType;
use Ls\Omni\Client\Ecommerce\Entity\Enum\PeriodicDiscType;
use Ls\Omni\Exception\InvalidEnumException;

class BasketLineDiscResponse
{

    /**
     * @property string $Description
     */
    protected $Description = null;

    /**
     * @property float $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @property float $DiscountPercent
     */
    protected $DiscountPercent = null;

    /**
     * @property DiscountType $DiscountType
     */
    protected $DiscountType = null;

    /**
     * @property int $LineNumber
     */
    protected $LineNumber = null;

    /**
     * @property string $No
     */
    protected $No = null;

    /**
     * @property string $OfferNumber
     */
    protected $OfferNumber = null;

    /**
     * @property string $PeriodicDiscGroup
     */
    protected $PeriodicDiscGroup = null;

    /**
     * @property PeriodicDiscType $PeriodicDiscType
     */
    protected $PeriodicDiscType = null;

    /**
     * @property float $Quantity
     */
    protected $Quantity = null;

    /**
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param float $DiscountAmount
     * @return $this
     */
    public function setDiscountAmount($DiscountAmount)
    {
        $this->DiscountAmount = $DiscountAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->DiscountAmount;
    }

    /**
     * @param float $DiscountPercent
     * @return $this
     */
    public function setDiscountPercent($DiscountPercent)
    {
        $this->DiscountPercent = $DiscountPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercent()
    {
        return $this->DiscountPercent;
    }

    /**
     * @param DiscountType|string $DiscountType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setDiscountType($DiscountType)
    {
        if ( ! $DiscountType instanceof DiscountType ) {
            if ( DiscountType::isValid( $DiscountType ) ) 
                $DiscountType = new DiscountType( $DiscountType );
            elseif ( DiscountType::isValidKey( $DiscountType ) ) 
                $DiscountType = new DiscountType( constant( "DiscountType::$DiscountType" ) );
            elseif ( ! $DiscountType instanceof DiscountType )
                throw new InvalidEnumException();
        }
        $this->DiscountType = $DiscountType->getValue();
        
        return $this;
    }

    /**
     * @return DiscountType
     */
    public function getDiscountType()
    {
        return $this->DiscountType;
    }

    /**
     * @param int $LineNumber
     * @return $this
     */
    public function setLineNumber($LineNumber)
    {
        $this->LineNumber = $LineNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }

    /**
     * @param string $No
     * @return $this
     */
    public function setNo($No)
    {
        $this->No = $No;
        return $this;
    }

    /**
     * @return string
     */
    public function getNo()
    {
        return $this->No;
    }

    /**
     * @param string $OfferNumber
     * @return $this
     */
    public function setOfferNumber($OfferNumber)
    {
        $this->OfferNumber = $OfferNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfferNumber()
    {
        return $this->OfferNumber;
    }

    /**
     * @param string $PeriodicDiscGroup
     * @return $this
     */
    public function setPeriodicDiscGroup($PeriodicDiscGroup)
    {
        $this->PeriodicDiscGroup = $PeriodicDiscGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeriodicDiscGroup()
    {
        return $this->PeriodicDiscGroup;
    }

    /**
     * @param PeriodicDiscType|string $PeriodicDiscType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setPeriodicDiscType($PeriodicDiscType)
    {
        if ( ! $PeriodicDiscType instanceof PeriodicDiscType ) {
            if ( PeriodicDiscType::isValid( $PeriodicDiscType ) ) 
                $PeriodicDiscType = new PeriodicDiscType( $PeriodicDiscType );
            elseif ( PeriodicDiscType::isValidKey( $PeriodicDiscType ) ) 
                $PeriodicDiscType = new PeriodicDiscType( constant( "PeriodicDiscType::$PeriodicDiscType" ) );
            elseif ( ! $PeriodicDiscType instanceof PeriodicDiscType )
                throw new InvalidEnumException();
        }
        $this->PeriodicDiscType = $PeriodicDiscType->getValue();
        
        return $this;
    }

    /**
     * @return PeriodicDiscType
     */
    public function getPeriodicDiscType()
    {
        return $this->PeriodicDiscType;
    }

    /**
     * @param float $Quantity
     * @return $this
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }


}

