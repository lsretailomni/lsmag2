<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class ContactGetByIdResponse implements ResponseInterface
{

    /**
     * @property MemberContact $ContactGetByIdResult
     */
    protected $ContactGetByIdResult = null;

    /**
     * @param MemberContact $ContactGetByIdResult
     * @return $this
     */
    public function setContactGetByIdResult($ContactGetByIdResult)
    {
        $this->ContactGetByIdResult = $ContactGetByIdResult;
        return $this;
    }

    /**
     * @return MemberContact
     */
    public function getContactGetByIdResult()
    {
        return $this->ContactGetByIdResult;
    }

    /**
     * @return MemberContact
     */
    public function getResult()
    {
        return $this->ContactGetByIdResult;
    }


}

