<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use Ls\Omni\Client\ResponseInterface;

class ReplEcommHierarchyNodeResponse implements ResponseInterface
{

    /**
     * @property ReplHierarchyNodeResponse $ReplEcommHierarchyNodeResult
     */
    protected $ReplEcommHierarchyNodeResult = null;

    /**
     * @param ReplHierarchyNodeResponse $ReplEcommHierarchyNodeResult
     * @return $this
     */
    public function setReplEcommHierarchyNodeResult($ReplEcommHierarchyNodeResult)
    {
        $this->ReplEcommHierarchyNodeResult = $ReplEcommHierarchyNodeResult;
        return $this;
    }

    /**
     * @return ReplHierarchyNodeResponse
     */
    public function getReplEcommHierarchyNodeResult()
    {
        return $this->ReplEcommHierarchyNodeResult;
    }

    /**
     * @return ReplHierarchyNodeResponse
     */
    public function getResult()
    {
        return $this->ReplEcommHierarchyNodeResult;
    }


}

