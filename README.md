# Laravel Referral Rewriter Tag

[![Latest Version on Packagist](https://img.shields.io/packagist/v/the-3labs-team/laravel-referral-rewriter-tag.svg?style=flat-square)](https://packagist.org/packages/the-3labs-team/laravel-referral-rewriter-tag)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/the-3labs-team/laravel-referral-rewriter-tag/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/the-3labs-team/laravel-referral-rewriter-tag/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/the-3labs-team/laravel-referral-rewriter-tag/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/the-3labs-team/laravel-referral-rewriter-tag/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![PHPStan](https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/actions/workflows/phpstan.yml/badge.svg)](https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/actions/workflows/phpstan.yml)
[![Maintainability](https://api.codeclimate.com/v1/badges/a48e04d3306fa4a1f3a5/maintainability)](https://codeclimate.com/github/The-3Labs-Team/laravel-referral-rewriter-tag/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/a48e04d3306fa4a1f3a5/test_coverage)](https://codeclimate.com/github/The-3Labs-Team/laravel-referral-rewriter-tag/test_coverage)
[![Total Downloads](https://img.shields.io/packagist/dt/the-3labs-team/laravel-referral-rewriter-tag.svg?style=flat-square)](https://packagist.org/packages/the-3labs-team/laravel-referral-rewriter-tag)

## Installation

You can install the package via composer:

```bash
composer require the-3labs-team/laravel-referral-rewriter-tag
```

## Usage

```php
$referralRewriterTag = ReferralRewriterTag::rewrite('https://www.amazon.it/Hacklog-Anonimato-Manuale-Sicurezza-Informatica/dp/1520569912', 'my-tag', 'my-subtag');
```

## Supported Shops

* Amazon
* Ebay
* Instant-Gaming
* ... more to come!

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

- [Stefano Novelli](https://github.com/The-3Labs-Team)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
