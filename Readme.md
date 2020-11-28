[![Latest Stable Version](https://poser.pugx.org/progjp/nbu_currency/v/stable)](https://packagist.org/packages/progjp/nbu_currency)
[![Total Downloads](https://poser.pugx.org/progjp/nbu_currency/downloads)](https://packagist.org/packages/progjp/nbu_currency)
[![License](https://poser.pugx.org/progjp/nbu_currency/license)](https://packagist.org/packages/progjp/nbu_currency)
[![composer.lock available](https://poser.pugx.org/phpunit/phpunit/composerlock)](https://packagist.org/packages/phpunit/phpunit)
# NBU Currency Client

PHP client for NBU (National bank of Ukraine) API service (https://old.bank.gov.ua/doccatalog/document?id=72819047)

## Requirements

* PHP >=7.2
* ext-json
* ext-curl

## Install

Via Composer

`$ composer require progjp/nbu_currency`

## Usage

### Get All Currency rates

```php
$client = new CurrencyApiClient();
$client->getCurrencyRate();
```

### Get All Currency rates by date

```php
$client = new CurrencyApiClient();
$client->getCurrencyRate(null, new DateTime());
```

### Get Currency rate by date

```php
$client = new CurrencyApiClient();
$client->getCurrencyRate('USD', new DateTime());
```
