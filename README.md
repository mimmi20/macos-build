# macos-build

[![Latest Stable Version](https://poser.pugx.org/mimmi20/macos-build/v/stable?format=flat-square)](https://packagist.org/packages/mimmi20/macos-build)
[![Latest Unstable Version](https://poser.pugx.org/mimmi20/macos-build/v/unstable?format=flat-square)](https://packagist.org/packages/mimmi20/macos-build)
[![License](https://poser.pugx.org/mimmi20/macos-build/license?format=flat-square)](https://packagist.org/packages/mimmi20/macos-build)

## Code Status

[![codecov](https://codecov.io/gh/mimmi20/macos-build/branch/master/graph/badge.svg)](https://codecov.io/gh/mimmi20/macos-build)
[![Test Coverage](https://api.codeclimate.com/v1/badges/8b9ad5209c777ffaa1a9/test_coverage)](https://codeclimate.com/github/mimmi20/macos-build/test_coverage)
[![Average time to resolve an issue](https://isitmaintained.com/badge/resolution/mimmi20/macos-build.svg)](https://isitmaintained.com/project/mimmi20/macos-build "Average time to resolve an issue")
[![Percentage of issues still open](https://isitmaintained.com/badge/open/mimmi20/macos-build.svg)](https://isitmaintained.com/project/mimmi20/macos-build "Percentage of issues still open")
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fmimmi20%2Fmacos-build%2Fmaster)](https://dashboard.stryker-mutator.io/reports/github.com/mimmi20/macos-build/master)
[![Maintainability](https://api.codeclimate.com/v1/badges/8b9ad5209c777ffaa1a9/maintainability)](https://codeclimate.com/github/mimmi20/macos-build/maintainability)

## Requirements

This library requires PHP 8.1+.

## Installation

Run the command below to install via Composer

```shell
composer require mimmi20/macos-build
```

## Usage

```php
$build   = new \MacosBuild\MacosBuild();
$version = $build->getVersion($code);
```

## Issues and feature requests

Please report your issues and ask for new features on the GitHub Issue Tracker
at <https://github.com/mimmi20/macos-build/issues>
