# Filament popover

[![Latest Version on Packagist](https://img.shields.io/packagist/v/artmin96/filament-popover.svg?style=flat-square)](https://packagist.org/packages/artmin96/filament-popover)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/artmin96/filament-popover/run-tests?label=tests)](https://github.com/artmin96/filament-popover/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/artmin96/filament-popover/Check%20&%20fix%20styling?label=code%20style)](https://github.com/artmin96/filament-popover/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/artmin96/filament-popover.svg?style=flat-square)](https://packagist.org/packages/artmin96/filament-popover)

## Installation

You can install the package via composer:

```bash
composer require artmin96/filament-popover
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-popover-config"
```

This is the contents of the published config file:

```php
return [
    'themes' => [
        'light',
        'light-border',
        'material',
        'translucent',
    ],
    'animations' => [
        'shift-away',
        'shift-toward',
        'scale',
        'perspective',
    ],
];
```

## Usage

```html
<x-filament-popover::preview :model="$model"
    :view="'your-view-blade'"
    :viewData="[]"
    :allowHTML="true"
    :arrow="false"
    :theme="'light'"
    :interactive="true"
    :placement="'bottom'"
    :animation="'shift-away'"
>
    Show tooltip!
</x-filament-popover::preview>
```

You can send additional data to view via `viewData`.

Find other properties here: [https://atomiks.github.io/tippyjs/v6/all-props/](https://atomiks.github.io/tippyjs/v6/all-props/)

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Arthur Minasyan](https://github.com/ArtMin96)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
