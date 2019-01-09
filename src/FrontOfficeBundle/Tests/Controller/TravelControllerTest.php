<?php

namespace FrontOfficeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TravelControllerTest extends WebTestCase
{
    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'nouveau');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'editer/{id}');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'supprimer/{id}');
    }

}
