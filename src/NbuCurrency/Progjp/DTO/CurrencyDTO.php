<?php

namespace NbuCurrency\Progjp\DTO;

class CurrencyDTO{
    private string $currencyUrkText;
    private string $currencyCode;
    private string $rate;
    private string $exchangeDate;
    private string $currencyIsoCode;

    /**
     * @return string
     */
    public function getCurrencyUrkText(): string
    {
        return $this->currencyUrkText;
    }

    /**
     * @param string $currencyUrkText
     * @return CurrencyDTO
     */
    public function setCurrencyUrkText(string $currencyUrkText): CurrencyDTO
    {
        $this->currencyUrkText = $currencyUrkText;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return CurrencyDTO
     */
    public function setCurrencyCode(string $currencyCode): CurrencyDTO
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRate(): string
    {
        return $this->rate;
    }

    /**
     * @param string $rate
     * @return CurrencyDTO
     */
    public function setRate(string $rate): CurrencyDTO
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExchangeDate(): string
    {
        return $this->exchangeDate;
    }

    /**
     * @param string $exchangeDate
     * @return CurrencyDTO
     */
    public function setExchangeDate(string $exchangeDate): CurrencyDTO
    {
        $this->exchangeDate = $exchangeDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyIsoCode(): string
    {
        return $this->currencyIsoCode;
    }

    /**
     * @param string $currencyIsoCode
     * @return CurrencyDTO
     */
    public function setCurrencyIsoCode(string $currencyIsoCode): CurrencyDTO
    {
        $this->currencyIsoCode = $currencyIsoCode;
        return $this;
    }
}