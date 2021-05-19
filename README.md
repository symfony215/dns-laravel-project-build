# Retrieve DNS records

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/dns.svg?style=flat-square)](https://packagist.org/packages/spatie/dns)
![Tests](https://github.com/spatie/dns/workflows/tests/badge.svg)
[![Code style](https://github.com/spatie/dns/actions/workflows/php-cs-fixer.yml/badge.svg)](https://github.com/spatie/dns/actions/workflows/php-cs-fixer.yml)[![Total Downloads](https://img.shields.io/packagist/dt/spatie/dns.svg?style=flat-square)](https://packagist.org/packages/spatie/dns)

This package contains a class that can fetch DNS records.

```php
use Spatie\Dns\Dns;

$dns = new Dns();

$dns->getRecords('spatie.be'); // returns all available dns records

$dns->getRecords('spatie.be', 'A'); // returns only A records
```

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/dns.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/dns)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

If you do not have [dig](https://linux.die.net/man/1/dig) installed you will need it.

You can install the package via composer:

```bash
composer require spatie/dns
```

## Usage

The class can get these record types: `A`, `AAAA`, `CNAME`, `NS`, `SOA`, `MX`, `SRV`, `TXT`, `DNSKEY`, `CAA`, `NAPTR`.

```php
use Spatie\Dns\Dns;

$dns = new Dns();

$dns->getRecords('spatie.be'); // returns all available dns records

$dns->getRecords('spatie.be', 'A'); // returns only A records
$dns->getRecords('spatie.be', ['A', 'CNAME']); // returns both A and CNAME records
$dns->getRecords('spatie.be', DNS_MX); // returns only MX records
$dns->getRecords('spatie.be', DNS_A | DNS_AAAA); // returns both A and AAAA records
```

## Using a specific nameserver

You can get records from a specific nameserver.

```php
use Spatie\Dns\Dns;

(new Dns)
    ->useNameserver('ns1.openminds.be') // use ns1.openminds.be
    ->getRecords('spatie.be');
```

To filter the DNS record types you can use a string with the name of the record type, an array of names or one or multiple native php `DNS_XYZ` constants - for multiple you should use the `|` (pipe) bit operator.

The package comes with two handlers to get DNS records.
The `\Spatie\Dns\Handlers\Dig` handler will use [dig](https://wiki.ubuntuusers.de/dig/) CLI tool.
In case this isn't installed the `\Spatie\Dns\Handlers\DnsGetRecord` will be used which uses php native `dns_get_record()` function.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Postcardware

You're free to use this package, but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Kruikstraat 22, 2018 Antwerp, Belgium.

We publish all received postcards [on our company website](https://spatie.be/en/opensource/postcards).

## Credits

- [Harish Toshniwal](https://github.com/introwit)
- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
