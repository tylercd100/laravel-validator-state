# Validate states and provinces for USA and Canada with Laravel 5
[![Latest Version](https://img.shields.io/github/release/tylercd100/laravel-validator-state.svg?style=flat-square)](https://github.com/tylercd100/laravel-validator-state/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://travis-ci.org/tylercd100/laravel-validator-state.svg?branch=master)](https://travis-ci.org/tylercd100/laravel-validator-state)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tylercd100/laravel-validator-state/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/tylercd100/laravel-validator-state/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/tylercd100/laravel-validator-state/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/tylercd100/laravel-validator-state/?branch=master)
[![Dependency Status](https://www.versioneye.com/user/projects/56f3252c35630e0029db0187/badge.svg?style=flat)](https://www.versioneye.com/user/projects/56f3252c35630e0029db0187)
[![Total Downloads](https://img.shields.io/packagist/dt/tylercd100/laravel-validator-state.svg?style=flat-square)](https://packagist.org/packages/tylercd100/laravel-validator-state)

## Installation

Install via [composer](https://getcomposer.org/) - In the terminal:
```bash
composer require tylercd100/laravel-validator-state
```

Now add the following to the `providers` array in your `config/app.php`
```php
Tylercd100\Validator\State\ServiceProvider::class
```

## Usage

```php
Validator::make(['test' => 'UT'], ['test' => 'state']); //true
```