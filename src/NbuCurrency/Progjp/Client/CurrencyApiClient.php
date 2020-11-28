<?php

namespace NbuCurrency\Progjp\Client;

use GuzzleHttp\Client;
use NbuCurrency\Progjp\DTO\CurrencyDTO;
use NbuCurrency\Progjp\Exception\ClientException;
use NbuCurrency\Progjp\Exception\ResponseException;

class CurrencyApiClient
{
    const URL = "https://bank.gov.ua/NBUStatService/v1/statdirectory/exchangenew";

    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getCurrencyRate(string $currency = null, \DateTime $date = null): CurrencyCollection
    {
        $parameters = [];

        $currency ? $parameters['valcode'] = $currency : null;
        $date ? $parameters['date'] = $date->format('Ymd') : null;

        try {
            $result = json_decode($this->client->request(
                'GET',
                self::URL . '?json&' . http_build_query($parameters)
            )
                ->getBody()
                ->getContents()
            );
        } catch (\RuntimeException $e) {
            throw new ClientException($e);
        }

        $currencyCollection = new CurrencyCollection();
        foreach ($result as $currencyData) {
            try {
                $currencyCollection->addCurrencyData((new CurrencyDTO())
                    ->setCurrencyCode($currencyData->cc)
                    ->setCurrencyIsoCode($currencyData->r030)
                    ->setCurrencyUrkText($currencyData->txt)
                    ->setExchangeDate($currencyData->exchangedate)
                    ->setRate($currencyData->rate)
                );
            }catch (\Exception $e){
                throw new ResponseException($e->getMessage(), $e->getCode());
            }
        }

        return $currencyCollection;
    }
}