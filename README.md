This package will give you possibility to check DNS records server information.

## Installation

You can install the package via composer:

```bash
composer require kirplesha/dns-checekr
```

## Usage
    
Just call statical method `getDnsRecords` of `DnsChecker` class.
```php 
DnsChecker::getDnsRecords('google.com') 
```

## Run tests.

```sh
> php vendor/bin/phpunit
```