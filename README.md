# CodeCeption with DDEV PoC.

[![Build Status](https://travis-ci.org/tomasnorre/ddev-codeception-poc.svg?branch=master)](https://travis-ci.org/tomasnorre/ddev-codeception-poc)

This is a smal POC on how you can use CodeCeption within DDEV to run behaviour driven tests.

You can check it out by

```
$ git clone https://github.com/tomasnorre/ddev-codeception-poc.git
$ cd ddev-codeception-poc
$ composer install
$ ddev start
$ php vendor/bin/codecept run
```