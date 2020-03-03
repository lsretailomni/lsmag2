<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Replication\Test\Unit\Model;

use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Api\SearchCriteriaInterface;
use Exception;
use Magento\Framework\Phrase;
use Magento\Framework\Api\SortOrder;
use PHPUnit\Framework\TestCase;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use \Ls\Replication\Model\ReplCountryCodeRepository;
use \Ls\Replication\Model\ResourceModel\ReplCountryCode\Collection;
use \Ls\Replication\Model\ResourceModel\ReplCountryCode\CollectionFactory;
use \Ls\Replication\Api\ReplCountryCodeRepositoryInterface;
use \Ls\Replication\Api\Data\ReplCountryCodeInterface;
use \Ls\Replication\Api\Data\ReplCountryCodeSearchResultsInterface;
use \Ls\Replication\Model\ReplCountryCodeFactory;
use \Ls\Replication\Model\ReplCountryCodeSearchResultsFactory;

class ReplCountryCodeRepositoryTest extends TestCase
{

    /**
     * @property ReplCountryCodeFactory $objectFactory
     */
    protected $objectFactory = null;

    /**
     * @property CollectionFactory $collectionFactory
     */
    protected $collectionFactory = null;

    /**
     * @property ReplCountryCodeSearchResultsFactory $resultFactory
     */
    protected $resultFactory = null;

    /**
     * @property ReplCountryCodeRepository $model
     */
    private $model = null;

    /**
     * @property ReplCountryCodeInterface $entityInterface
     */
    private $entityInterface = null;

    /**
     * @property ReplCountryCodeSearchResultsInterface $entitySearchResultsInterface
     */
    private $entitySearchResultsInterface = null;

    public function setUp()
    {
        $this->objectFactory = $this->createPartialMock(ReplCountryCodeFactory::class, ['create']);
        $this->collectionFactory = $this->createMock(CollectionFactory::class);
        $this->resultFactory = $this->createMock(ReplCountryCodeSearchResultsFactory::class);
        $this->entityInterface = $this->createMock(ReplCountryCodeInterface::class);
        $this->entitySearchResultsInterface = $this->createMock(ReplCountryCodeSearchResultsInterface::class);
        $this->model = new ReplCountryCodeRepository(
                $this->objectFactory,
                $this->collectionFactory,
                $this->resultFactory
        );
    }

    public function testGetById()
    {
        $entityId = 1;
        $entityMock = $this->createMock(ReplCountryCodeRepository::class);
        $entityMock->method('getById')
             ->with($entityId)
             ->willReturn($entityId);
        $this->assertEquals($entityId, $entityMock->getById($entityId));
    }

    /**
     * @expectedException \Magento\Framework\Exception\NoSuchEntityException 
     * @expectedExceptionMessage Object with id 1 does not exist.
     */
    public function testGetWithNoSuchEntityException()
    {
        $entityId = 1;
        $entityMock = $this->createMock(ReplCountryCodeRepository::class);
        $entityMock->method('getById')
             ->with($entityId)
             ->willThrowException(
                 new NoSuchEntityException(
                     new Phrase('Object with id ' . $entityId . ' does not exist.')
                 )
             );
        $entityMock->getById($entityId);
    }

    public function testGetListWithSearchCriteria()
    {
        $searchCriteria = $this->getMockBuilder(SearchCriteriaInterface::class)->getMock();
        $entityMock = $this->createMock(ReplCountryCodeRepository::class);
        $entityMock->method('getList')
             ->with($searchCriteria)
             ->willReturn($this->entitySearchResultsInterface);
        $this->assertEquals($this->entitySearchResultsInterface, $entityMock->getList($searchCriteria));
    }

    public function testSave()
    {
        $entityMock = $this->createMock(ReplCountryCodeRepository::class);
        $entityMock->method('save')
             ->with($this->entityInterface)
             ->willReturn($this->entityInterface);
        $this->assertEquals($this->entityInterface, $entityMock->save($this->entityInterface));
    }


}

