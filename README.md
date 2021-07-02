# laravel-postal

A simple postal to get details of Post Office by searching Postal PIN Code or Post Office Branch Name of India for Laravel 5.*|6.*|7.*|8.* 

[![Latest Stable Version](https://poser.pugx.org/bhavinjr/laravel-postal/v/stable)](https://packagist.org/packages/bhavinjr/laravel-postal)
[![Total Downloads](https://poser.pugx.org/bhavinjr/laravel-postal/downloads)](https://packagist.org/packages/bhavinjr/laravel-postal)
[![License](https://poser.pugx.org/bhavinjr/laravel-postal/license)](https://packagist.org/packages/bhavinjr/laravel-postal)

## Installation

First, you'll need to install the package via Composer:

```shell
$ composer require bhavinjr/laravel-postal
```

If you are don't use using Laravel 5.5.* Then, update `config/app.php` by adding an entry for the service provider.


```php
'providers' => [
    // ...
    Bhavinjr\Postal\Providers\PostalServiceProvider::class,
];

'aliases' => [
    //...
    "Postal": "Bhavinjr\Postal\Facades\Postal",
];
```


## Usage

The package gives you the following methods to use:

Get Post Office(s) details search by Postal PIN Code

### Postal::findByCode()

```php
use Postal;

Postal::findByCode(380001);
```

### Postal::findByBranch()

Get Post Office(s) details search by Post Office branch name

```php
use Postal;

Postal::findByBranch('Ahmedabad');
```