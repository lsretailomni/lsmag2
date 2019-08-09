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
use Ls\Omni\Client\Ecommerce\Operation\ReplEcommBarcodes;
use Ls\Replication\Api\ReplBarcodeRepositoryInterface as ReplBarcodeRepository;
use Ls\Replication\Model\ReplBarcodeFactory;
use Ls\Replication\Api\Data\ReplBarcodeInterface;

class ReplEcommBarcodesTask extends AbstractReplicationTask
{

    const JOB_CODE = 'replication_repl_barcode';

    const CONFIG_PATH = 'ls_mag/replication/repl_barcode';

    const CONFIG_PATH_STATUS = 'ls_mag/replication/status_repl_barcode';

    const CONFIG_PATH_LAST_EXECUTE = 'ls_mag/replication/last_execute_repl_barcode';

    /**
     * @property ReplBarcodeRepository $repository
     */
    protected $repository = null;

    /**
     * @property ReplBarcodeFactory $factory
     */
    protected $factory = null;

    /**
     * @property ReplBarcodeInterface $data_interface
     */
    protected $data_interface = null;

    /**
     * @param ReplBarcodeRepository $repository
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
        return $this;
    }

    /**
     * @return ReplBarcodeRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param ReplBarcodeFactory $factory
     * @return $this
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;
        return $this;
    }

    /**
     * @return ReplBarcodeFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * @param ReplBarcodeInterface $data_interface
     * @return $this
     */
    public function setDataInterface($data_interface)
    {
        $this->data_interface = $data_interface;
        return $this;
    }

    /**
     * @return ReplBarcodeInterface
     */
    public function getDataInterface()
    {
        return $this->data_interface;
    }

    public function __construct(ScopeConfigInterface $scope_config, Config $resource_config, LoggerInterface $logger, LsHelper $helper, ReplicationHelper $repHelper, ReplBarcodeFactory $factory, ReplBarcodeRepository $repository, ReplBarcodeInterface $data_interface)
    {
        parent::__construct($scope_config, $resource_config, $logger, $helper, $repHelper);
        $this->repository = $repository;
        $this->factory = $factory;
        $this->data_interface = $data_interface;
    }

    public function makeRequest($last_key, $full_replication = false, $batchsize = 100, $storeId = '', $baseUrl = '')
    {
        $request = new ReplEcommBarcodes($baseUrl);
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

