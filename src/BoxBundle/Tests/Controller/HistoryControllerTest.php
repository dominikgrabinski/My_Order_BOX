<?php

namespace BoxBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HistoryControllerTest extends WebTestCase
{
    public function testHistory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/history');
    }

}
