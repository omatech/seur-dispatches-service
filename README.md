# SEUR Dispatches Service

[![Latest Version on Packagist](https://img.shields.io/packagist/v/omatech/seur-dispatches-service.svg?style=flat-square)](https://packagist.org/packages/omatech/seur-dispatches-service)
[![Total Downloads](https://img.shields.io/packagist/dt/omatech/seur-dispatches-service.svg?style=flat-square)](https://packagist.org/packages/omatech/seur-dispatches-service)

Use of SEUR dispatches services. Currently only the 'ConsultaListadoExpedicionesStr' service is available.

## Installation

You can install the package via composer:

```bash
composer require omatech/seur-dispatches-service
```

Environment configuration:

```env
SEUR_MODE=
SEUR_USER=
SEUR_PASSWORD=
```

## Usage

``` php
$search = [
  'in0' => 'S',
  'in1' => '',
  'in2' => null,
  'in3' => '',
  'in4' => '1234-56',
  'in5' => '01-05-2019',
  'in6' => '08-05-2019',
  'in7' => '',
  'in8' => '',
  'in9' => '',
  'in10' => '',
  'in11' => null,
  'in12' => 'MYUSERNAME',
  'in13' => 'MYPASSWORD',
  'in14' => 'N'
];
$seur = new Seur();
$dispatches = $seur->dispatches($search);

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

If you discover any security related issues, please email aroca@omatech.com instead of using the issue tracker.

## Credits

- [Adrià Roca](https://github.com/adriaroca)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.