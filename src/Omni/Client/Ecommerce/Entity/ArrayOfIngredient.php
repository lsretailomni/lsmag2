<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Omni\Client\Ecommerce\Entity;

use IteratorAggregate;
use ArrayIterator;

class ArrayOfIngredient implements IteratorAggregate
{

    /**
     * @property Ingredient[] $Ingredient
     */
    protected $Ingredient = array(
        
    );

    /**
     * @param Ingredient[] $Ingredient
     * @return $this
     */
    public function setIngredient($Ingredient)
    {
        $this->Ingredient = $Ingredient;
        return $this;
    }

    /**
     * @return Ingredient[]
     */
    public function getIterator()
    {
        return new ArrayIterator( $this->Ingredient );
    }

    /**
     * @return Ingredient[]
     */
    public function getIngredient()
    {
        return $this->Ingredient;
    }


}

