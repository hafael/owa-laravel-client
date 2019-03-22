# Open Web Analytics PHP REST Client for Laravel 5.3+
=================

## Installation

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

Run the composer require command from your terminal:
```sh
$ composer require hafael/owa-laravel-client
```
Open [LaravelRoot]/config/app.php and register the required service provider **above** your application providers.

```php
'providers' => [
    /*
     * Application Service Providers...
     */
    ...
    Hafael\OpenWebAnalytics\Laravel\OpenWebAnalyticsServiceProvider::class,
],
```

If you prefer, add the facade

```php
'aliases' => [
    
    ...
    'OpenWebAnalytics' => Hafael\OpenWebAnalytics\Laravel\Facades\OpenWebAnalytics::class,
],
```


License
----
BSD-3-Clause
