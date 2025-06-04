# Laravel Referral Rewriter Tag

[![Latest Version on Packagist](https://img.shields.io/packagist/v/the-3labs-team/laravel-referral-rewriter-tag.svg?style=flat-square)](https://packagist.org/packages/the-3labs-team/laravel-referral-rewriter-tag)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/the-3labs-team/laravel-referral-rewriter-tag/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/the-3labs-team/laravel-referral-rewriter-tag/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/the-3labs-team/laravel-referral-rewriter-tag/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/the-3labs-team/laravel-referral-rewriter-tag/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![PHPStan](https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/actions/workflows/phpstan.yml/badge.svg)](https://github.com/The-3Labs-Team/laravel-referral-rewriter-tag/actions/workflows/phpstan.yml)
[![Maintainability](https://api.codeclimate.com/v1/badges/a48e04d3306fa4a1f3a5/maintainability)](https://codeclimate.com/github/The-3Labs-Team/laravel-referral-rewriter-tag/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/a48e04d3306fa4a1f3a5/test_coverage)](https://codeclimate.com/github/The-3Labs-Team/laravel-referral-rewriter-tag/test_coverage)
[![Total Downloads](https://img.shields.io/packagist/dt/the-3labs-team/laravel-referral-rewriter-tag.svg?style=flat-square)](https://packagist.org/packages/the-3labs-team/laravel-referral-rewriter-tag)

## Requirements

| Package Version     | Requirement | Version      |
|---------------------|-------------|--------------|
| 1.x.x               | Laravel     | 10.x or 11.x |
| 1.x.x               | Nova        | 4.x          |
| dev-beta-laravel-12 | Laravel     | 12.x         |
| dev-beta-laravel-12 | Nova        | 5.x          |

## Installation

You can install the package via composer:

```bash
composer require the-3labs-team/laravel-referral-rewriter-tag
```

## Usage

Before: https://www.amazon.i/dp/1520569912

```php
$referralRewriterTag = ReferralRewriterTag::rewrite('https://www.amazon.it/dp/1520569912', 'my-tag', 'my-subtag');
```

After: https://www.amazon.it/dp/1520569912?tag=my-tag&ascsubtag=my-subtag


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

## Sponsor

<div>  
    <a href="https://www.tomshw.it/" target="_blank" rel="noopener noreferrer">
        <img  src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/toms.png" alt="Tom's Hardware - Notizie, recensioni, guide all'acquisto e approfondimenti per tutti gli appassionati di computer, smartphone, videogiochi, film, serie tv, gadget e non solo" />  
    </a>
    <a href="https://spaziogames.it/" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/spazio.png" alt="Spaziogames - Tutto sul mondo dei videogiochi. Troverai tantissime anteprime, recensioni, notizie dei giochi per tutte le console, PC, iPhone e Android." />
    </a>
    <br/>
    <a href="https://cpop.it/" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/cpop.png" alt="Cpop - News, recensioni, guide su fumetto, cinema & serie TV, gioco da tavolo e di ruolo e collezionismo. Tutto quello di cui hai bisogno per rimanere aggiornato sul mondo della cultura pop"/>
    </a>
    <a href="https://data4biz.com/" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/d4b.png" alt="Data4Biz - Sito dedicato alla trasformazione digitale del business" />
    </a>
    <br/>
    <a href="https://soshomegarden.com/" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/sos.png" alt="SOS Home & Garden - Realtà dedicata a 360 gradi ai settori della casa e del giardino." />
    </a>
    <a href="https://global.techradar.com/it-it" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/techradar.png" alt="Techradar - Le ultime notizie e recensioni dal mondo della tecnologia, su computer, sistemi per la casa, gadget e altro." />
    </a>
    <br/>
    <a href="https://aibay.it/" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/aibay.png" alt="Aibay - Scopri AiBay, il leader delle notizie sull'intelligenza artificiale. Resta aggiornato sulle ultime innovazioni, ricerche e tendenze del mondo AI con approfondimenti, interviste esclusive e analisi dettagliate." />
    </a>
    <a href="https://coinlabs.it/" target="_blank" rel="noopener noreferrer" >
        <img src="https://3labs-assets.b-cdn.net/assets/logos/banner-github/coinlabs.png" alt="Coinlabs - Notizie, analisi approfondite, guide e opinioni aggiornate sul mondo delle criptovalute, blockchain e finanza" />
    </a>

</div>

