# A simple laravel Package to flush sessions via artisan command.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/eru/sflash.svg?style=flat-square)](https://packagist.org/packages/eru/sflash)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/eru/sflash/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/eru/sflash/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/eru/sflash/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/eru/sflash/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/eru/sflash.svg?style=flat-square)](https://packagist.org/packages/eru/sflash)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/sFlash.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/sFlash)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require eru/sflash
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="sflash-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="sflash-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="sflash-views"
```

## Usage

```php
$sFlash = new Eru\SFlash();
echo $sFlash->echoPhrase('Hello, Eru!');
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

- [Erfan Ahmed Siam](https://github.com/imerfanahmed)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
