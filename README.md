# slim3-rest-api

This is a simple skeleton project using slim3 framework, the goal is to serve as REST API for a single page application such as Angular 2.

### Installation ###

1. Install Composer
2. Install slim3 with composer
```bash
$ composer require slim/slim "^3.0"
```
3. Install the defined dependencies
```bash
$ composer install
```

### Run ###

1. cd slim3-rest-api
2. run it with PHP built-in server
```bash
$ php -S 0.0.0.0:8888 -t public public/index.php
```
3. Go to  http://localhost:8888


### Key files ###

1. public/index.php : Entry point
2. app/settings.php : configuration file such as database, other settings
3. app/routes.php : application routes
4. app/src/Models : model files
