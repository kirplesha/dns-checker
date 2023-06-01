This package will give you possibility to check DNS records server information.

## Installation

Add to your composer.json file as a dependency to repositories section
```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/kirplesha/dns-checker"
    }
  ]
}
```
You can install the package via composer:

```bash
composer require kirplesha/dns-checker
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