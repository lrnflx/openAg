<?php

namespace App\Tests\Gardener;

use Doctrine\Common\Persistence\ObjectManager;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\Gardener\GardenerManager;
use App\Entity\Gardener;

class GardenerManagerTest extends TestCase
{
    /** @var MockObject|ObjectManager */
    private $entityManager;
        
    /** @var GardenerManager */
    private $manager;

    protected function setUp()
    {
        $this->entityManager = $this->createMock(ObjectManager::class);
        $this->manager = new GardenerManager($this->entityManager);
    }
    
    public function testCreate()
    {
        $this->entityManager
            ->expects(self::once())
            ->method('persist');
        $this->entityManager
            ->expects(self::once())
            ->method('flush');
        $gardener = $this->manager->createFromArray([
            'username' => 'jules',
            'email' => 'jules@jardinier.fr'
        ]);
        self::assertInstanceOf(Gardener::class, $gardener);
    }
}