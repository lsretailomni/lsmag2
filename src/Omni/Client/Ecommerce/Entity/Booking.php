<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

class Booking extends Entity
{

    /**
     * @property string $ActivityNo
     */
    protected $ActivityNo = null;

    /**
     * @property string $AllowanceNo
     */
    protected $AllowanceNo = null;

    /**
     * @property float $CancelAmount
     */
    protected $CancelAmount = null;

    /**
     * @property string $CancelPolicy
     */
    protected $CancelPolicy = null;

    /**
     * @property string $CancelPolicyDescription
     */
    protected $CancelPolicyDescription = null;

    /**
     * @property string $ClientName
     */
    protected $ClientName = null;

    /**
     * @property string $ClientNo
     */
    protected $ClientNo = null;

    /**
     * @property string $Comment
     */
    protected $Comment = null;

    /**
     * @property string $DateFrom
     */
    protected $DateFrom = null;

    /**
     * @property string $DateTo
     */
    protected $DateTo = null;

    /**
     * @property string $Description
     */
    protected $Description = null;

    /**
     * @property string $ItemNo
     */
    protected $ItemNo = null;

    /**
     * @property float $LineDiscountAmount
     */
    protected $LineDiscountAmount = null;

    /**
     * @property float $LineDiscountPercentage
     */
    protected $LineDiscountPercentage = null;

    /**
     * @property string $Location
     */
    protected $Location = null;

    /**
     * @property int $NoOfPersons
     */
    protected $NoOfPersons = null;

    /**
     * @property string $PaymentStatus
     */
    protected $PaymentStatus = null;

    /**
     * @property string $PriceCurrency
     */
    protected $PriceCurrency = null;

    /**
     * @property float $Quantity
     */
    protected $Quantity = null;

    /**
     * @property string $Status
     */
    protected $Status = null;

    /**
     * @property string $TimeFrom
     */
    protected $TimeFrom = null;

    /**
     * @property string $TimeTo
     */
    protected $TimeTo = null;

    /**
     * @property float $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @property float $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @param string $ActivityNo
     * @return $this
     */
    public function setActivityNo($ActivityNo)
    {
        $this->ActivityNo = $ActivityNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityNo()
    {
        return $this->ActivityNo;
    }

    /**
     * @param string $AllowanceNo
     * @return $this
     */
    public function setAllowanceNo($AllowanceNo)
    {
        $this->AllowanceNo = $AllowanceNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAllowanceNo()
    {
        return $this->AllowanceNo;
    }

    /**
     * @param float $CancelAmount
     * @return $this
     */
    public function setCancelAmount($CancelAmount)
    {
        $this->CancelAmount = $CancelAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getCancelAmount()
    {
        return $this->CancelAmount;
    }

    /**
     * @param string $CancelPolicy
     * @return $this
     */
    public function setCancelPolicy($CancelPolicy)
    {
        $this->CancelPolicy = $CancelPolicy;
        return $this;
    }

    /**
     * @return string
     */
    public function getCancelPolicy()
    {
        return $this->CancelPolicy;
    }

    /**
     * @param string $CancelPolicyDescription
     * @return $this
     */
    public function setCancelPolicyDescription($CancelPolicyDescription)
    {
        $this->CancelPolicyDescription = $CancelPolicyDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getCancelPolicyDescription()
    {
        return $this->CancelPolicyDescription;
    }

    /**
     * @param string $ClientName
     * @return $this
     */
    public function setClientName($ClientName)
    {
        $this->ClientName = $ClientName;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientName()
    {
        return $this->ClientName;
    }

    /**
     * @param string $ClientNo
     * @return $this
     */
    public function setClientNo($ClientNo)
    {
        $this->ClientNo = $ClientNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientNo()
    {
        return $this->ClientNo;
    }

    /**
     * @param string $Comment
     * @return $this
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param string $DateFrom
     * @return $this
     */
    public function setDateFrom($DateFrom)
    {
        $this->DateFrom = $DateFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateFrom()
    {
        return $this->DateFrom;
    }

    /**
     * @param string $DateTo
     * @return $this
     */
    public function setDateTo($DateTo)
    {
        $this->DateTo = $DateTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateTo()
    {
        return $this->DateTo;
    }

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
     * @param string $ItemNo
     * @return $this
     */
    public function setItemNo($ItemNo)
    {
        $this->ItemNo = $ItemNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemNo()
    {
        return $this->ItemNo;
    }

    /**
     * @param float $LineDiscountAmount
     * @return $this
     */
    public function setLineDiscountAmount($LineDiscountAmount)
    {
        $this->LineDiscountAmount = $LineDiscountAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getLineDiscountAmount()
    {
        return $this->LineDiscountAmount;
    }

    /**
     * @param float $LineDiscountPercentage
     * @return $this
     */
    public function setLineDiscountPercentage($LineDiscountPercentage)
    {
        $this->LineDiscountPercentage = $LineDiscountPercentage;
        return $this;
    }

    /**
     * @return float
     */
    public function getLineDiscountPercentage()
    {
        return $this->LineDiscountPercentage;
    }

    /**
     * @param string $Location
     * @return $this
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param int $NoOfPersons
     * @return $this
     */
    public function setNoOfPersons($NoOfPersons)
    {
        $this->NoOfPersons = $NoOfPersons;
        return $this;
    }

    /**
     * @return int
     */
    public function getNoOfPersons()
    {
        return $this->NoOfPersons;
    }

    /**
     * @param string $PaymentStatus
     * @return $this
     */
    public function setPaymentStatus($PaymentStatus)
    {
        $this->PaymentStatus = $PaymentStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->PaymentStatus;
    }

    /**
     * @param string $PriceCurrency
     * @return $this
     */
    public function setPriceCurrency($PriceCurrency)
    {
        $this->PriceCurrency = $PriceCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->PriceCurrency;
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

    /**
     * @param string $Status
     * @return $this
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $TimeFrom
     * @return $this
     */
    public function setTimeFrom($TimeFrom)
    {
        $this->TimeFrom = $TimeFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeFrom()
    {
        return $this->TimeFrom;
    }

    /**
     * @param string $TimeTo
     * @return $this
     */
    public function setTimeTo($TimeTo)
    {
        $this->TimeTo = $TimeTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeTo()
    {
        return $this->TimeTo;
    }

    /**
     * @param float $TotalAmount
     * @return $this
     */
    public function setTotalAmount($TotalAmount)
    {
        $this->TotalAmount = $TotalAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }

    /**
     * @param float $UnitPrice
     * @return $this
     */
    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }


}
