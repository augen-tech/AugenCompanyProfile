# Ayaide Company Profile

![ayaide](https://files.slack.com/files-pri/TA69B5YKC-FATQJJ94J/ayaidebanner.jpg)

> A Company Profile for [Ayaide](https://ayaide.com).

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Below are requirements your local machine needs:
1. Download [Composer](http://getcomposer.org/doc/00-intro.md).
2. PHP 7 or newest.
3. HTTP Server.
4. Database Engine.

### Installation

Below are step by step series of examples you need to do:
1. Copy `.env.example` and rename it to `.env`.

2. Install all the dependencies as specified in `composer.lock`. Allow folder permissions if composer asks.

```bash
$ composer install
```

3. Generate new key to `.env` file.

```bash
$ php artisan key:generate
```

4. Run server in local environment.

```bash
$ php artisan serve
```
