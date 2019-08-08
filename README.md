# Stickee PHP Code Style

This repository contains config files for tools for PHP projects.

## Usage

First install this package:

```
composer require --dev stickee/php-code-style
```

and then pass the `-c`/`--c`/`--config` option to the tool you wish to use and use `vendor/stickee/php-code-style/dist/<config>.yml` as the path.

### PHPStan

PHPStan can be ran using:

```
vendor/bin/phpstan <COMMAND> -c vendor/stickee/php-code-style/dist/phpstan.neon
```

### PHPCS

PHP-CS-Fixer can be ran using:

```
vendor/bin/phpcs <COMMAND> --config vendor/stickee/php-code-style/dist/.phpcs
```
