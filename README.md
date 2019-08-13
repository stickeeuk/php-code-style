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

### Husky
To allow husky to automatically run the above tasks, copy the `.huskyrc` and `.lintstagedrc` 
file into the root of your project. Using `stickee-control` will do this automatically for you.
