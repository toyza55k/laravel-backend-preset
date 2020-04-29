# Backend

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require toyza55k/laravel-backend-preset
```

## Usage
make model
``` bash
php artisan make:backend-model Test
```

make model with request, view-model, controller, export
``` bash
php artisan make:backend-model Test -rice
```

make controller
``` bash
php artisan make:backend-controller TestController
```

make request
``` bash
php artisan make:backend-request TestRequest
```

make view-model (spatie/view-model)
``` bash
php artisan make:backend-view-model TestViewModel
```

make export (Maatwebsite/Laravel-Excel)
``` bash
php artisan make:backend-export TestExport
```

add backend preset (no need)
``` bash
php artisan ui backend
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [author name][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/toyza55k/backend.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/toyza55k/backend.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/toyza55k/backend/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/toyza55k/backend
[link-downloads]: https://packagist.org/packages/toyza55k/backend
[link-travis]: https://travis-ci.org/toyza55k/backend
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/toyza55k
[link-contributors]: ../../contributors
