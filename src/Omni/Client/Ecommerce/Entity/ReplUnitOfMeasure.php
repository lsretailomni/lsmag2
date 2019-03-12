<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

class ReplUnitOfMeasure
{

    /**
     * @property string $Description
     */
    protected $Description = null;

    /**
     * @property string $Id
     */
    protected $Id = null;

    /**
     * @property boolean $IsDeleted
     */
    protected $IsDeleted = null;

    /**
     * @property string $ShortDescription
     */
    protected $ShortDescription = null;

    /**
     * @property int $UnitDecimals
     */
    protected $UnitDecimals = null;

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
     * @param string $ShortDescription
     * @return $this
     */
    public function setShortDescription($ShortDescription)
    {
        $this->ShortDescription = $ShortDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->ShortDescription;
    }

    /**
     * @param int $UnitDecimals
     * @return $this
     */
    public function setUnitDecimals($UnitDecimals)
    {
        $this->UnitDecimals = $UnitDecimals;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnitDecimals()
    {
        return $this->UnitDecimals;
    }


}
