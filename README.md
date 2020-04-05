# Simple UUID in Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fyggi/laravel-simple-uuid.svg?style=flat-square)](https://packagist.org/packages/fyggi/laravel-simple-uuid)
[![Total Downloads](https://img.shields.io/packagist/dt/fyggi/laravel-simple-uuid.svg?style=flat-square)](https://packagist.org/packages/fyggi/laravel-simple-uuid)
[![Quality Score](https://img.shields.io/scrutinizer/g/fyggi/laravel-simple-uuid.svg?style=flat-square)](https://scrutinizer-ci.com/g/fyggi/laravel-simple-uuid)
[![StyleCI](https://github.styleci.io/repos/253307873/shield?branch=master)](https://github.styleci.io/repos/253307873)
[![Treeware](https://img.shields.io/badge/dynamic/json?color=brightgreen&label=Treeware&query=%24.total&url=https%3A%2F%2Fpublic.offset.earth%2Fusers%2Ftreeware%2Ftrees)](https://treeware.earth)

This package adds a simple trait to add UUID to your Laravel models.  When using the trait, it automatically sets the route key and route key name to the UUID.

The trait also includes a scope, `whereUuid($uuid)`.

**NOTE:** The package assumes you have a field in your database called `uuid`.

## Installation

You can install the package via composer:

```bash
composer require fyggi/laravel-simple-uuid
```

## Example

``` php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Fyggi\SimpleUuid\HasUuid;

class Post extends Model
{
    use HasUuid;
}
```

### Security

If you discover any security related issues, please email peter@fyggi.dk instead of using the issue tracker.

## Credits

- [Peter Brinck](https://github.com/fyggi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Treeware
You're free to use this package, but if it makes it to your production environment you are required to buy the world a tree.

It’s now common knowledge that one of the best tools to tackle the climate crisis and keep our temperatures from rising above 1.5C is to <a href="https://www.bbc.co.uk/news/science-environment-48870920">plant trees</a>. If you support this package and contribute to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.

You can buy trees here [offset.earth/treeware](https://plant.treeware.earth/{vendor}/{package})

Read more about Treeware at [treeware.earth](http://treeware.earth)

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
