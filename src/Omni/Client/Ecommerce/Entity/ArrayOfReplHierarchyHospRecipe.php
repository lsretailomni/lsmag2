<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfReplHierarchyHospRecipe implements IteratorAggregate
{

    /**
     * @property ReplHierarchyHospRecipe[] $ReplHierarchyHospRecipe
     */
    protected $ReplHierarchyHospRecipe = [
        
    ];

    /**
     * @param ReplHierarchyHospRecipe[] $ReplHierarchyHospRecipe
     * @return $this
     */
    public function setReplHierarchyHospRecipe($ReplHierarchyHospRecipe)
    {
        $this->ReplHierarchyHospRecipe = $ReplHierarchyHospRecipe;
        return $this;
    }

    /**
     * @return ReplHierarchyHospRecipe[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->ReplHierarchyHospRecipe );
    }

    /**
     * @return ReplHierarchyHospRecipe[]
     */
    public function getReplHierarchyHospRecipe()
    {
        return $this->ReplHierarchyHospRecipe;
    }


}
