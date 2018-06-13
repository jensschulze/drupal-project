# Extended Composer template for Drupal projects

Forked from [drupal-composer/drupal-project](https://github.com/drupal-composer/drupal-project) (Find the full documentation there!). Slightly altered configuration and some pre-installed modules.

Master: [![Build Status](https://travis-ci.org/jensschulze/drupal-project.svg?branch=master)](https://travis-ci.org/jensschulze/drupal-project)

Develop: [![Build Status](https://travis-ci.org/jensschulze/drupal-project.svg?branch=develop)](https://travis-ci.org/jensschulze/drupal-project)

This project template should provide a kickstart for managing your site
dependencies with [Composer](https://getcomposer.org/).

## Caveat: PHP version

Tested under the [newest "production ready" PHP version](http://php.net/supported-versions.php) only! (please see `travis.yml`)

## Usage

```
composer create-project jensschulze/drupal-project:develop-dev some-dir --stability dev --no-interaction
```

## Suggestions

Use the [hirak/prestissimo](https://packagist.org/packages/hirak/prestissimo) Composer parallel download plug-in:
```
composer global require hirak/prestissimo
```
