# Lang2

Simple management of texts on multilingual sites

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.


## Install

Via Composer

``` bash
$ composer require MultilingualPHP/Lang2
```

## Usage

``` php
$tm = new FileTextManager("dir/to/texts", [ "en", "ru", "zh" ]);
$Lang2 = new Lang2($tm);

$Lang2->langFromURL("zh.example.me/article?id=15");
// or
$Lang2->langFromURL("/ru-KZ/article?id=15"); // returns "/article?id=15"

if (isset($user)) {
    $Lang2->langFromCode($user->preferedLanguage);
}

echo $Lang2("hello-text-identifier");
// Привет

echo "<img src='/localized-images/" . $Lang2->file("public/localized-images/", "image.png") . "' />";
// <img src='/localized-images/ru-image.png' />
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email romash1408@yanex.ru instead of using the issue tracker.

## Credits

- [Roman Dubinin][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/MultilingualPHP/Lang2.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/MultilingualPHP/Lang2/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/MultilingualPHP/Lang2.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/MultilingualPHP/Lang2.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/MultilingualPHP/Lang2.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/MultilingualPHP/Lang2
[link-travis]: https://travis-ci.org/MultilingualPHP/Lang2
[link-scrutinizer]: https://scrutinizer-ci.com/g/MultilingualPHP/Lang2/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/MultilingualPHP/Lang2
[link-downloads]: https://packagist.org/packages/MultilingualPHP/Lang2
[link-author]: https://github.com/romash1408
[link-contributors]: ../../contributors
