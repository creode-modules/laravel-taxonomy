# Base module for handling taxonomy within Laravel.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/creode/laravel-taxonomy.svg?style=flat-square)](https://packagist.org/packages/creode-modules/laravel-taxonomy)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/creode-modules/laravel-taxonomy/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/creode-modules/laravel-taxonomy/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/creode-modules/laravel-taxonomy/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/creode-modules/laravel-taxonomy/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/creode-modules/laravel-taxonomy.svg?style=flat-square)](https://packagist.org/packages/creode/laravel-taxonomy)

This module is designed to allow other modules to add taxonomy to their models. It provides a base class for terms and a trait for parentable models.

## Installation

You can install the package via composer:

```bash
composer require creode/laravel-taxonomy
```

## Usage
Covered in this section are details about some of the features of this module and how to use them.

### Term class
A term class corresponds to a single term in a taxonomy. It is a model that can be used to store additional information about a term.

This module aims to allow you to easily create new Term models by extending the base Term class. This allows you to add additional functionality to your terms. You can see an example below on how this can be done.

```php
use Creode\LaravelTaxonomy\Models\Term;
class Folder extends Term {}
```

### Dynamic Relationships
The goal of this module to allow other modules to add dynamic relationships to child classes. For example, you might want to link the above `Folder` model to a `Page` model. This can be done by extending the `TermsServiceProvider` and adding the following properties.

```php
class FolderPageServiceProvider extends TermsServiceProvider {
    protected $termClass = Folder::class;
    protected $relationClass = Page::class;
    protected $relationFieldId = 'folder_id'; // optional (only used if multiple is false).
    protected $relationshipName = 'folder';
    protected $multiple = false; // optional (defaults to false).
}
```

Adding a relationship in this way allows a decoupling of dependencies between modules. This means that the `Page` module does not need to know about the `Folder` module in order to add a relationship between the two.

### Parentable Trait
The parentable trait allows you to add a parent relationship to a term. This is useful for creating a hierarchy of terms. For example, you might want to create a folder structure for your terms.

```php
use Creode\LaravelTaxonomy\Traits\Parentable;
class Folder extends Term {
    use Parentable;
}
```

### Migration Helper
Since this module is designed to be used by other modules, it comes with an optional helper class that can be used to create common `Term` fields. This helper class can be used in a migration file like so:

```php
Schema::create('folders', function (Blueprint $table) {
    $table->id();
    $table->baseTermFields();
});
```

This just adds the following fields to your table. You can also add these fields manually if you prefer:
```php
$this->string('name')->nullable();
$this->string('slug')->nullable();
$this->unsignedBigInteger('parent_id')->nullable();
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
