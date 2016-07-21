# Petycje-php.siecobywatelska.pl

[![Build Status](https://travis-ci.org/watchdogpolska/petycja-php.siecobywatelska.pl.svg?branch=master)](https://travis-ci.org/watchdogpolska/petycja-php.siecobywatelska.pl)
[![License](http://img.shields.io/:license-mit-blue.svg)](http://doge.mit-license.org)

Aplikacji internetowa służąca do organizacji wydarzęń mających na celu wpływanie na działania organów publicznych do wykorzystania przez Stowrzyszenie oraz inne podmioty. Narzędzie to będzie służyć do wyrażania zdania społeczeństwa w sprawach istotnych, a takżę będzie centrum informacji na temat sprawy, a także składania petycji.

Aplikacja została zbudowana wykorzystując [CakePHP](http://cakephp.org) 3.x.

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run
```bash
composer create-project --prefer-dist cakephp/app [app_name]
```

You should now be able to visit the path to where you installed the app and see
the setup traffic lights.

## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.

## Licence

MIT
