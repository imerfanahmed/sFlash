# A simple laravel Package to flush sessions via artisan command.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/eru/sflash.svg?style=flat-square)](https://packagist.org/packages/eru/sflash)

[//]: # ([![GitHub Tests Action Status]&#40;https://img.shields.io/github/actions/workflow/status/eru/sflash/run-tests.yml?branch=main&label=tests&style=flat-square&#41;]&#40;https://github.com/eru/sflash/actions?query=workflow%3Arun-tests+branch%3Amain&#41;)
[//]: # ([![GitHub Code Style Action Status]&#40;https://img.shields.io/github/actions/workflow/status/eru/sflash/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square&#41;]&#40;https://github.com/eru/sflash/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain&#41;)
[![Total Downloads](https://img.shields.io/packagist/dt/eru/sflash.svg?style=flat-square)](https://packagist.org/packages/eru/sflash)

Sometimes we store data on sessions such as cart data or maybe any information regarding
users that might have no feature to delete them from user interface!
sFlush is here to help you in this regard!
simply add this package and simply run from your terminal and boom you are good to go,
and flushed your session data from terminal!

[//]: # (## Support us)

[//]: # ()
[//]: # ([<img src="https://github-ads.s3.eu-central-1.amazonaws.com/sFlash.jpg?t=1" width="419px" />]&#40;https://spatie.be/github-ad-click/sFlash&#41;)

[//]: # ()
[//]: # (We invest a lot of resources into creating [best in class open source packages]&#40;https://spatie.be/open-source&#41;. You can support us by [buying one of our paid products]&#40;https://spatie.be/open-source/support-us&#41;.)

[//]: # ()
[//]: # (We highly appreciate you sending us a postcard from your hometown, mentioning which of our package&#40;s&#41; you are using. You'll find our address on [our contact page]&#40;https://spatie.be/about-us&#41;. We publish all received postcards on [our virtual postcard wall]&#40;https://spatie.be/open-source/postcards&#41;.)

## Installation

You can install the package via composer:

```bash
composer require eru/sflash
```


## Usage

```bash
php artisan session:flush
```

[//]: # (## Testing)

[//]: # ()
[//]: # (```bash)

[//]: # (composer test)

[//]: # (```)

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
