<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\Loyalty\Entity\Enum\ItemNumberType;
use \Ls\Omni\Exception\InvalidEnumException;
use \Ls\Omni\Client\Loyalty\Entity\Enum\SourceType;

class OrderClickCollect
{

    /**
     * @property string $CardId
     */
    protected $CardId = null;

    /**
     * @property string $ContactId
     */
    protected $ContactId = null;

    /**
     * @property string $Email
     */
    protected $Email = null;

    /**
     * @property string $Id
     */
    protected $Id = null;

    /**
     * @property ItemNumberType $ItemNumberType
     */
    protected $ItemNumberType = null;

    /**
     * @property ArrayOfOrderDiscountLineCreateRequest $OrderDiscountLineCreateRequests
     */
    protected $OrderDiscountLineCreateRequests = null;

    /**
     * @property ArrayOfOrderLineCreateRequest $OrderLineCreateRequests
     */
    protected $OrderLineCreateRequests = null;

    /**
     * @property string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @property SourceType $SourceType
     */
    protected $SourceType = null;

    /**
     * @property string $StoreId
     */
    protected $StoreId = null;

    /**
     * @param string $CardId
     * @return $this
     */
    public function setCardId($CardId)
    {
        $this->CardId = $CardId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardId()
    {
        return $this->CardId;
    }

    /**
     * @param string $ContactId
     * @return $this
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactId()
    {
        return $this->ContactId;
    }

    /**
     * @param string $Email
     * @return $this
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param ItemNumberType|string $ItemNumberType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setItemNumberType($ItemNumberType)
    {
        if ( ! $ItemNumberType instanceof ItemNumberType ) {
            if ( ItemNumberType::isValid( $ItemNumberType ) ) 
                $ItemNumberType = new ItemNumberType( $ItemNumberType );
            elseif ( ItemNumberType::isValidKey( $ItemNumberType ) ) 
                $ItemNumberType = new ItemNumberType( constant( "ItemNumberType::$ItemNumberType" ) );
            elseif ( ! $ItemNumberType instanceof ItemNumberType )
                throw new InvalidEnumException();
        }
        $this->ItemNumberType = $ItemNumberType->getValue();

        return $this;
    }

    /**
     * @return ItemNumberType
     */
    public function getItemNumberType()
    {
        return $this->ItemNumberType;
    }

    /**
     * @param ArrayOfOrderDiscountLineCreateRequest $OrderDiscountLineCreateRequests
     * @return $this
     */
    public function setOrderDiscountLineCreateRequests($OrderDiscountLineCreateRequests)
    {
        $this->OrderDiscountLineCreateRequests = $OrderDiscountLineCreateRequests;
        return $this;
    }

    /**
     * @return ArrayOfOrderDiscountLineCreateRequest
     */
    public function getOrderDiscountLineCreateRequests()
    {
        return $this->OrderDiscountLineCreateRequests;
    }

    /**
     * @param ArrayOfOrderLineCreateRequest $OrderLineCreateRequests
     * @return $this
     */
    public function setOrderLineCreateRequests($OrderLineCreateRequests)
    {
        $this->OrderLineCreateRequests = $OrderLineCreateRequests;
        return $this;
    }

    /**
     * @return ArrayOfOrderLineCreateRequest
     */
    public function getOrderLineCreateRequests()
    {
        return $this->OrderLineCreateRequests;
    }

    /**
     * @param string $PhoneNumber
     * @return $this
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param SourceType|string $SourceType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setSourceType($SourceType)
    {
        if ( ! $SourceType instanceof SourceType ) {
            if ( SourceType::isValid( $SourceType ) ) 
                $SourceType = new SourceType( $SourceType );
            elseif ( SourceType::isValidKey( $SourceType ) ) 
                $SourceType = new SourceType( constant( "SourceType::$SourceType" ) );
            elseif ( ! $SourceType instanceof SourceType )
                throw new InvalidEnumException();
        }
        $this->SourceType = $SourceType->getValue();

        return $this;
    }

    /**
     * @return SourceType
     */
    public function getSourceType()
    {
        return $this->SourceType;
    }

    /**
     * @param string $StoreId
     * @return $this
     */
    public function setStoreId($StoreId)
    {
        $this->StoreId = $StoreId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreId()
    {
        return $this->StoreId;
    }


}

