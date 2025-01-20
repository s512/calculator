## About

This is a simple calculator app using [the Laravel framework](https://laravel.com).

The main branch currently has just two main commits: framework install and Laravel Pint.

See [this Pull Request](https://github.com/s512/calculator/pull/1) for the addition of the calculator app.

## Setup
1. Copy environment settings: `cp .env.example .env` 
2. Install PHP dependencies: `composer install`
3. Install frontend dependencies: `npm install && npm run build`
4. Generate an app key: `php artisan key:generate`
5. Launch with: `php artisan serve`

## Testing
Run `php artisan test` to run the suite.
