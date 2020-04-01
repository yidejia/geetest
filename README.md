# geetest
极验验证码

## Installation

```
$ composer require jzweb/geetest
```

Or you can add following to `require` key in `composer.json`:


```json
"jzweb/geetest": "~1.0"
```

Next, You should need to register the service provider. Open up `config/app.php` and add following into the `providers` key:

```php
JZWeb\Geetest\GeetestServiceProvider::class
```

And you can register the Geetest Facade in the `aliases` of `config/app.php` :

```php
'Geetest' => JZWeb\Geetest\Geetest::class
```



