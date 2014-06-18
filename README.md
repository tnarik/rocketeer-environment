# Rocketeer - Environment plugin

[![Build Status](http://img.shields.io/travis/tnarik/rocketeer-environment.svg)](https://travis-ci.org/tnarik/rocketeer-environment)
[![Packagist](http://img.shields.io/packagist/v/tnarik/rocketeer-environment.svg)](https://packagist.org/packages/tnarik/rocketeer-environment)
[![Packagist](http://img.shields.io/packagist/l/tnarik/rocketeer-environment.svg)](https://packagist.org/packages/tnarik/rocketeer-environment)
[![Packagist](http://img.shields.io/packagist/dt/tnarik/rocketeer-environment.svg)](https://packagist.org/packages/tnarik/rocketeer-environment)

## Description
Provides Environment tagging creation and local private configuration transport to Rocketeer deployments for Laravel, hooked to the Deploy task.



Once added to the project, add the following to your providers array in `app/config/app.php` :

```php
'Rocketeer\Plugins\RocketeerEnvironmentServiceProvider',
```
