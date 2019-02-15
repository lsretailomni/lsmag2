<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

class ReplImageLink
{

    /**
     * @property string $Description
     */
    protected $Description = null;

    /**
     * @property int $DisplayOrder
     */
    protected $DisplayOrder = null;

    /**
     * @property string $ImageId
     */
    protected $ImageId = null;

    /**
     * @property boolean $IsDeleted
     */
    protected $IsDeleted = null;

    /**
     * @property string $KeyValue
     */
    protected $KeyValue = null;

    /**
     * @property string $TableName
     */
    protected $TableName = null;

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
     * @param int $DisplayOrder
     * @return $this
     */
    public function setDisplayOrder($DisplayOrder)
    {
        $this->DisplayOrder = $DisplayOrder;
        return $this;
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->DisplayOrder;
    }

    /**
     * @param string $ImageId
     * @return $this
     */
    public function setImageId($ImageId)
    {
        $this->ImageId = $ImageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageId()
    {
        return $this->ImageId;
    }

    /**
     * @param boolean $IsDeleted
     * @return $this
     */
    public function setIsDeleted($IsDeleted)
    {
        $this->IsDeleted = $IsDeleted;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDeleted()
    {
        return $this->IsDeleted;
    }

    /**
     * @param string $KeyValue
     * @return $this
     */
    public function setKeyValue($KeyValue)
    {
        $this->KeyValue = $KeyValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getKeyValue()
    {
        return $this->KeyValue;
    }

    /**
     * @param string $TableName
     * @return $this
     */
    public function setTableName($TableName)
    {
        $this->TableName = $TableName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTableName()
    {
        return $this->TableName;
    }


}

