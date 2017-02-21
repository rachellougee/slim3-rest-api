# slim3-rest-api

This is a simple skeleton project using slim3 framework, the goal is to serve as REST API for a single page application such as Angular 2.

### Installation ###

*  Install Composer
*  Install slim3 with composer
```bash
$ composer require slim/slim "^3.0"
```
*  Install the defined dependencies
```bash
$ composer install
```

### Run ###

*  cd slim3-rest-api
*  run it with PHP built-in server
```bash
$ php -S 0.0.0.0:8888 -t public public/index.php
```
*  Go to  http://localhost:8888


### Key files ###

*  public/index.php : Entry point
*  app/settings.php : configuration file such as database, other settings
*  app/routes.php : application routes
*  app/src/Models : model files
