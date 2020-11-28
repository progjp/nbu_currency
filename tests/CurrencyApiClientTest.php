<?php

namespace NbuCurrency\Progjp\Tests;

use NbuCurrency\Progjp\Client\CurrencyApiClient;
use NbuCurrency\Progjp\Client\CurrencyCollection;
use Nette\Utils\DateTime;
use PHPUnit\Framework\TestCase;

class CurrencyApiClientTest extends TestCase
{
    public function testClient()
    {
        $client = new CurrencyApiClient();
        $this->assertEquals(new CurrencyCollection(), $client->getCurrencyRate('UAH'));
        $this->assertTrue(count($client->getCurrencyRate()) > 0);
        $this->assertTrue(count($client->getCurrencyRate('USD', new DateTime())) > 0);
    }
}