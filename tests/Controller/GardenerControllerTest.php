<?php
namespace App\Tests\Controller;

use Symfony\Component\Panther\PantherTestCase;

class GardenerControllerTest extends PantherTestCase
{  
    public function testIndex()
   {
       $client = static::createPantherClient();

       $client->request('GET', '/');

       sleep(10);

       // $this->assertEquals(200, $client->getResponse()->getStatusCode());
      
    
   }

}