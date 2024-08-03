# Unofficial Biteship PHP SDK build using saloon

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fromhome/laravel-biteship.svg?style=flat-square)](https://packagist.org/packages/fromhome/laravel-biteship)
[![PHPUnit](https://github.com/atfromhome/laravel-biteship/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/atfromhome/laravel-biteship/actions/workflows/run-tests.yml)
[![Laravel Pint](https://github.com/atfromhome/laravel-biteship/actions/workflows/fix-php-code-style-issues.yml/badge.svg?branch=main)](https://github.com/atfromhome/laravel-biteship/actions/workflows/fix-php-code-style-issues.yml)
[![Psalm](https://github.com/atfromhome/laravel-biteship/actions/workflows/run-psalm-static-analyst.yml/badge.svg?branch=main)](https://github.com/atfromhome/laravel-biteship/actions/workflows/run-psalm-static-analyst.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/fromhome/laravel-biteship.svg?style=flat-square)](https://packagist.org/packages/fromhome/laravel-biteship)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require fromhome/laravel-biteship
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-biteship-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-biteship-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-biteship-views"
```

## Usage

```php
$biteship = new Fromhome\Biteship();
echo $biteship->echoPhrase('Hello, Fromhome!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nuradiyana](https://github.com/atfromhome)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
