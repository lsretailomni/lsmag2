<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\Loyalty\Entity\Enum\NodeLineType;
use \Ls\Omni\Exception\InvalidEnumException;

class MenuNodeLine
{

    /**
     * @property string $Id
     */
    protected $Id = null;

    /**
     * @property NodeLineType $NodeLineType
     */
    protected $NodeLineType = null;

    /**
     * @property int $Ord
     */
    protected $Ord = null;

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
     * @param NodeLineType|string $NodeLineType
     * @return $this
     * @throws InvalidEnumException
     */
    public function setNodeLineType($NodeLineType)
    {
        if ( ! $NodeLineType instanceof NodeLineType ) {
            if ( NodeLineType::isValid( $NodeLineType ) ) 
                $NodeLineType = new NodeLineType( $NodeLineType );
            elseif ( NodeLineType::isValidKey( $NodeLineType ) ) 
                $NodeLineType = new NodeLineType( constant( "NodeLineType::$NodeLineType" ) );
            elseif ( ! $NodeLineType instanceof NodeLineType )
                throw new InvalidEnumException();
        }
        $this->NodeLineType = $NodeLineType->getValue();

        return $this;
    }

    /**
     * @return NodeLineType
     */
    public function getNodeLineType()
    {
        return $this->NodeLineType;
    }

    /**
     * @param int $Ord
     * @return $this
     */
    public function setOrd($Ord)
    {
        $this->Ord = $Ord;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrd()
    {
        return $this->Ord;
    }


}

