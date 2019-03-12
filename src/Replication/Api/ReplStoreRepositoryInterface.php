<?php

namespace Ls\Replication\Api;

use Ls\Replication\Api\Data\ReplStoreInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */
interface ReplStoreRepositoryInterface
{

    public function getList(SearchCriteriaInterface $criteria);

    public function save(ReplStoreInterface $page);

    public function delete(ReplStoreInterface $page);

    public function getById($id);

    public function deleteById($id);


}
