# macos-build

[![Latest Stable Version](https://poser.pugx.org/mimmi20/macos-build/v/stable?format=flat-square)](https://packagist.org/packages/mimmi20/macos-build)
[![Latest Unstable Version](https://poser.pugx.org/mimmi20/macos-build/v/unstable?format=flat-square)](https://packagist.org/packages/mimmi20/macos-build)
[![License](https://poser.pugx.org/mimmi20/macos-build/license?format=flat-square)](https://packagist.org/packages/mimmi20/macos-build)

## Code Status

[![codecov](https://codecov.io/gh/mimmi20/macos-build/branch/master/graph/badge.svg)](https://codecov.io/gh/mimmi20/macos-build)
[![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/mimmi20/macos-build.svg)](http://isitmaintained.com/project/mimmi20/macos-build "Average time to resolve an issue")
[![Percentage of issues still open](http://isitmaintained.com/badge/open/mimmi20/macos-build.svg)](http://isitmaintained.com/project/mimmi20/macos-build "Percentage of issues still open")


## Requirements

This library requires PHP 7.4+.

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
at https://github.com/mimmi20/macos-build/issues
