<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use \Ls\Omni\Client\ResponseInterface;

class SearchResponse implements ResponseInterface
{

    /**
     * @property SearchRs $SearchResult
     */
    protected $SearchResult = null;

    /**
     * @param SearchRs $SearchResult
     * @return $this
     */
    public function setSearchResult($SearchResult)
    {
        $this->SearchResult = $SearchResult;
        return $this;
    }

    /**
     * @return SearchRs
     */
    public function getSearchResult()
    {
        return $this->SearchResult;
    }

    /**
     * @return SearchRs
     */
    public function getResult()
    {
        return $this->SearchResult;
    }


}

