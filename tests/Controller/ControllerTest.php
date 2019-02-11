<?php
namespace App\Tests\Controller;

use Symfony\Component\Panther\PantherTestCase;

class ControllerTest extends PantherTestCase
{
    public function testIndex()
    {
        $client = static::createPantherClient(); 

        $client->request('GET', '/');

        sleep(10);

        // $this->assertEquals(200, $client->getResponse()->getStatusCode());
        
        $this->assertSame('Homepage', $client->getCrawler()->filter('h1')->text()); 
    }
}