<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Omni\Client\Loyalty\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfRecipe implements IteratorAggregate
{

    /**
     * @property Recipe[] $Recipe
     */
    protected $Recipe = array(
        
    );

    /**
     * @param Recipe[] $Recipe
     * @return $this
     */
    public function setRecipe($Recipe)
    {
        $this->Recipe = $Recipe;
        return $this;
    }

    /**
     * @return Recipe[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->Recipe );
    }

    /**
     * @return Recipe[]
     */
    public function getRecipe()
    {
        return $this->Recipe;
    }


}
