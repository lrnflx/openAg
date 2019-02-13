<?php

namespace App\Tests\Entity;

use App\Entity\Gardener;
use PHPUnit\Framework\TestCase;


class GardenerTest extends TestCase
{
    public function testEmail()
    {
        $gardener = new Gardener();
        $gardener->setEmail('gardener@mail.com');
        $this->assertSame('gardener@mail.com', $gardener->getEmail());
    }

    public function testPots()
    {
        
    }
}