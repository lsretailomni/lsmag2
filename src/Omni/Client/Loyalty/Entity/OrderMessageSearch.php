<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\RequestInterface;

class OrderMessageSearch implements RequestInterface
{

    /**
     * @property OrderMessageSearchRequest $searchRequest
     */
    protected $searchRequest = null;

    /**
     * @param OrderMessageSearchRequest $searchRequest
     * @return $this
     */
    public function setSearchRequest($searchRequest)
    {
        $this->searchRequest = $searchRequest;
        return $this;
    }

    /**
     * @return OrderMessageSearchRequest
     */
    public function getSearchRequest()
    {
        return $this->searchRequest;
    }


}
