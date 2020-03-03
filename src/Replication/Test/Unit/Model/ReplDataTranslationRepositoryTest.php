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
use \Ls\Replication\Model\ReplDataTranslationRepository;
use \Ls\Replication\Model\ResourceModel\ReplDataTranslation\Collection;
use \Ls\Replication\Model\ResourceModel\ReplDataTranslation\CollectionFactory;
use \Ls\Replication\Api\ReplDataTranslationRepositoryInterface;
use \Ls\Replication\Api\Data\ReplDataTranslationInterface;
use \Ls\Replication\Api\Data\ReplDataTranslationSearchResultsInterface;
use \Ls\Replication\Model\ReplDataTranslationFactory;
use \Ls\Replication\Model\ReplDataTranslationSearchResultsFactory;

class ReplDataTranslationRepositoryTest extends TestCase
{

    /**
     * @property ReplDataTranslationFactory $objectFactory
     */
    protected $objectFactory = null;

    /**
     * @property CollectionFactory $collectionFactory
     */
    protected $collectionFactory = null;

    /**
     * @property ReplDataTranslationSearchResultsFactory $resultFactory
     */
    protected $resultFactory = null;

    /**
     * @property ReplDataTranslationRepository $model
     */
    private $model = null;

    /**
     * @property ReplDataTranslationInterface $entityInterface
     */
    private $entityInterface = null;

    /**
     * @property ReplDataTranslationSearchResultsInterface
     * $entitySearchResultsInterface
     */
    private $entitySearchResultsInterface = null;

    public function setUp()
    {
        $this->objectFactory = $this->createPartialMock(ReplDataTranslationFactory::class, ['create']);
        $this->collectionFactory = $this->createMock(CollectionFactory::class);
        $this->resultFactory = $this->createMock(ReplDataTranslationSearchResultsFactory::class);
        $this->entityInterface = $this->createMock(ReplDataTranslationInterface::class);
        $this->entitySearchResultsInterface = $this->createMock(ReplDataTranslationSearchResultsInterface::class);
        $this->model = new ReplDataTranslationRepository(
                $this->objectFactory,
                $this->collectionFactory,
                $this->resultFactory
        );
    }

    public function testGetById()
    {
        $entityId = 1;
        $entityMock = $this->createMock(ReplDataTranslationRepository::class);
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
        $entityMock = $this->createMock(ReplDataTranslationRepository::class);
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
        $entityMock = $this->createMock(ReplDataTranslationRepository::class);
        $entityMock->method('getList')
             ->with($searchCriteria)
             ->willReturn($this->entitySearchResultsInterface);
        $this->assertEquals($this->entitySearchResultsInterface, $entityMock->getList($searchCriteria));
    }

    public function testSave()
    {
        $entityMock = $this->createMock(ReplDataTranslationRepository::class);
        $entityMock->method('save')
             ->with($this->entityInterface)
             ->willReturn($this->entityInterface);
        $this->assertEquals($this->entityInterface, $entityMock->save($this->entityInterface));
    }


}

