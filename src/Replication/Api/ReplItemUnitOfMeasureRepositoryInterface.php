<?php

namespace Ls\Replication\Api;

use Ls\Replication\Api\Data\ReplItemUnitOfMeasureInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */
interface ReplItemUnitOfMeasureRepositoryInterface
{

    public function getList(SearchCriteriaInterface $criteria);

    public function save(ReplItemUnitOfMeasureInterface $page);

    public function delete(ReplItemUnitOfMeasureInterface $page);

    public function getById($id);

    public function deleteById($id);


}

