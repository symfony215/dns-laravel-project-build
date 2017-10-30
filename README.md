> This package is still in development, a stable release will be tagged soon.

# A easy class to get all sort of dns related info for a given domain name

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/dns-info.svg?style=flat-square)](https://packagist.org/packages/spatie/dns-info)
[![Build Status](https://img.shields.io/travis/spatie/dns-info/master.svg?style=flat-square)](https://travis-ci.org/spatie/dns-info)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/xxxxxxxxx.svg?style=flat-square)](https://insight.sensiolabs.com/projects/xxxxxxxxx)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/dns-info.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/dns-info)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/dns-info.svg?style=flat-square)](https://packagist.org/packages/spatie/dns-info)

A easy to handle and drop in class that can get all sort of dns related info for a given domain name.

## Installation

You can install the package via composer:

```bash
composer require spatie/dns-info
```

## Usage

``` php
$dns = new Spatie\DnsInfo('spatie.be');
echo $dns->getARecords();
echo $dns->getAAAARecords();
echo $dns->getNSRecords();
echo $dns->getSOARecords();
echo $dns->getMXRecords();
echo $dns->getTXTRecords();
echo $dns->getDNSKEYRecords();
```

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

Our address is: Spatie, Samberstraat 69D, 2060 Antwerp, Belgium.

We publish all received postcards [on our company website](https://spatie.be/en/opensource/postcards).

## Credits

- [Harish Toshniwal](https://github.com/introwit)
- [All Contributors](../../contributors)

## Support us

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

Does your business depend on our contributions? Reach out and support us on [Patreon](https://www.patreon.com/spatie). 
All pledges will be dedicated to allocating workforce on maintenance and new awesome stuff.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
