<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\ResponseInterface;

class AccountGetByIdResponse implements ResponseInterface
{

    /**
     * @property Account $AccountGetByIdResult
     */
    protected $AccountGetByIdResult = null;

    /**
     * @param Account $AccountGetByIdResult
     * @return $this
     */
    public function setAccountGetByIdResult($AccountGetByIdResult)
    {
        $this->AccountGetByIdResult = $AccountGetByIdResult;
        return $this;
    }

    /**
     * @return Account
     */
    public function getAccountGetByIdResult()
    {
        return $this->AccountGetByIdResult;
    }

    /**
     * @return Account
     */
    public function getResult()
    {
        return $this->AccountGetByIdResult;
    }


}
