# Base module for handling taxonomy within Laravel.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/creode-modules/laravel-taxonomy.svg?style=flat-square)](https://packagist.org/packages/creode-modules/laravel-taxonomy)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/creode-modules/laravel-taxonomy/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/creode-modules/laravel-taxonomy/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/creode-modules/laravel-taxonomy/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/creode-modules/laravel-taxonomy/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/creode-modules/laravel-taxonomy.svg?style=flat-square)](https://packagist.org/packages/creode-modules/laravel-taxonomy)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require creode-modules/laravel-taxonomy
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-taxonomy-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-taxonomy-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-taxonomy-views"
```

## Usage

```php
$laravelTaxonomy = new Creode\LaravelTaxonomy();
echo $laravelTaxonomy->echoPhrase('Hello, Creode!');
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

- [Creode](https://github.com/creode-modules)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
