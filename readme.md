# Module Platform

Provides a basic platform for module development.

## Basic Usage

`php artisan module:make {module}`

This will generate new module skeleton code beneath the modules directory.   The `modules.json` file will allow you to isolate each module's configuration settings including service providers, routes, etc. 

## Package Development

Alternatively, you may decide to package your modules separately in order to promote reuse of code.  Add your module to the composer.json file then run `composer update`.  Navigate to the `config/modules.php` file and ensure that the specified paths are referencing the appropriate vendor directory.

`php artisan module:list` 

This will list any detected modules.  

`php artisan module:disable {module}`

This will allow you to disable any active modules.

`php artisan module:migrate --seed`

This will seed any new module data.  

## Official Documentation

https://github.com/nWidart/laravel-modules