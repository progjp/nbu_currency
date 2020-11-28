<?php

namespace NbuCurrency\Progjp\Client;

use NbuCurrency\Progjp\DTO\CurrencyDTO;

class CurrencyCollection implements \Countable
{
    private $currencies = [];

    public function addCurrencyData(CurrencyDTO $currencyDTO): void
    {
        $this->currencies[] = $currencyDTO;
    }

    public function all(): array
    {
        return $this->currencies;
    }

    public function count()
    {
        return count($this->currencies);
    }
}