# Alt Three Schema

A migration dumping tool for Laravel 5.


## Installation

Either [PHP](https://php.net) 5.5+ or [HHVM](http://hhvm.com) 3.6+ are required.

To get the latest version of Alt Three Schema, simply add the following line to the require block of your `composer.json` file:

```bash
$ composer require alt-three/schema
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "alt-three/schema": "^1.0"
    }
}
```

Once Alt Three Schema is installed, you need to register the service provider. Open up `config/app.php` and add the `AltThree\Schema\SchemaServiceProvider` class to the `providers`.


## Security

If you discover a security vulnerability within this package, please e-mail us at support@alt-three.com. All security vulnerabilities will be promptly addressed.


## License

Alt Three Schema is licensed under [The MIT License (MIT)](LICENSE).
