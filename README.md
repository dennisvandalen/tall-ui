# This is my package tall-ui

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dennisvandalen/tall-ui.svg?style=flat-square)](https://packagist.org/packages/dennisvandalen/tall-ui)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/dennisvandalen/tall-ui/run-tests?label=tests)](https://github.com/dennisvandalen/tall-ui/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/dennisvandalen/tall-ui/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/dennisvandalen/tall-ui/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/dennisvandalen/tall-ui.svg?style=flat-square)](https://packagist.org/packages/dennisvandalen/tall-ui)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require dennisvandalen/tall-ui
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="tall-ui-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="tall-ui-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="tall-ui-views"
```

## Usage

```php
$tallUi = new DennisVanDalen\TallUi();
echo $tallUi->echoPhrase('Hello, DennisVanDalen!');
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

- [Dennis van Dalen](https://github.com/dennisvandalen)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
