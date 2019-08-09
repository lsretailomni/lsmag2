<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Replication\Cron;

use Psr\Log\LoggerInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Config\Model\ResourceModel\Config;
use Ls\Core\Helper\Data as LsHelper;
use Ls\Replication\Helper\ReplicationHelper;
use Ls\Omni\Client\Ecommerce\Entity\ReplRequest;
use Ls\Omni\Client\Ecommerce\Operation\ReplEcommProductGroups;
use Ls\Replication\Api\ReplProductGroupRepositoryInterface as ReplProductGroupRepository;
use Ls\Replication\Model\ReplProductGroupFactory;
use Ls\Replication\Api\Data\ReplProductGroupInterface;

class ReplEcommProductGroupsTask extends AbstractReplicationTask
{

    const JOB_CODE = 'replication_repl_product_group';

    const CONFIG_PATH = 'ls_mag/replication/repl_product_group';

    const CONFIG_PATH_STATUS = 'ls_mag/replication/status_repl_product_group';

    const CONFIG_PATH_LAST_EXECUTE = 'ls_mag/replication/last_execute_repl_product_group';

    /**
     * @property ReplProductGroupRepository $repository
     */
    protected $repository = null;

    /**
     * @property ReplProductGroupFactory $factory
     */
    protected $factory = null;

    /**
     * @property ReplProductGroupInterface $data_interface
     */
    protected $data_interface = null;

    /**
     * @param ReplProductGroupRepository $repository
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
        return $this;
    }

    /**
     * @return ReplProductGroupRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param ReplProductGroupFactory $factory
     * @return $this
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;
        return $this;
    }

    /**
     * @return ReplProductGroupFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * @param ReplProductGroupInterface $data_interface
     * @return $this
     */
    public function setDataInterface($data_interface)
    {
        $this->data_interface = $data_interface;
        return $this;
    }

    /**
     * @return ReplProductGroupInterface
     */
    public function getDataInterface()
    {
        return $this->data_interface;
    }

    public function __construct(ScopeConfigInterface $scope_config, Config $resource_config, LoggerInterface $logger, LsHelper $helper, ReplicationHelper $repHelper, ReplProductGroupFactory $factory, ReplProductGroupRepository $repository, ReplProductGroupInterface $data_interface)
    {
        parent::__construct($scope_config, $resource_config, $logger, $helper, $repHelper);
        $this->repository = $repository;
        $this->factory = $factory;
        $this->data_interface = $data_interface;
    }

    public function makeRequest($last_key, $full_replication = false, $batchsize = 100, $storeId = '', $baseUrl = '')
    {
        $request = new ReplEcommProductGroups($baseUrl);
        $request->getOperationInput()
                 ->setReplRequest( ( new ReplRequest() )->setBatchSize($batchsize)
                                                        ->setFullReplication($full_replication)
                                                        ->setLastKey($last_key)
                                                        ->setStoreId($storeId));
        return $request;
    }

    public function getConfigPath()
    {
        return self::CONFIG_PATH;
    }

    public function getConfigPathStatus()
    {
        return self::CONFIG_PATH_STATUS;
    }

    public function getConfigPathLastExecute()
    {
        return self::CONFIG_PATH_LAST_EXECUTE;
    }

    public function getMainEntity()
    {
        return $this->data_interface;
    }


}

