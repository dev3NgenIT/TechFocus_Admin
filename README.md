<p align="center">
<a href="https://github.com/rubensrocha/laravel-breeze-multi-auth-admin/issues"><img alt="GitHub issues" src="https://img.shields.io/github/issues/rubensrocha/laravel-breeze-multi-auth-admin"></a>
<a href="https://github.com/rubensrocha/laravel-breeze-multi-auth-admin/network"><img alt="GitHub forks" src="https://img.shields.io/github/forks/rubensrocha/laravel-breeze-multi-auth-admin"></a>
<a href="https://packagist.org/packages/rubensrocha/laravel-breeze-multi-auth-admin"><img src="https://img.shields.io/packagist/dt/rubensrocha/laravel-breeze-multi-auth-admin" alt="Total Downloads"></a>
<a href="https://github.com/rubensrocha/laravel-breeze-multi-auth-admin/blob/main/LICENSE"><img alt="GitHub license" src="https://img.shields.io/github/license/rubensrocha/laravel-breeze-multi-auth-admin"></a>
</p>

## About This Repository

This is a repository created to serve as a basis for those who intend to create a Laravel project using Breeze with multiple guards/auth, where it is possible to create a website and an admin panel with separate authentication for each one.

Unlike many tutorials that teach you how to achieve this goal, this repository is in fact complete and has all the basic functional functions in the admin panel.

### Site(User)
- Register
- Login
- Logout
- Forgot Password
- Reset Password
- Confirm Password
- Verify Email

### Admin
- Login with email or username
- Logout
- Forgot Password
- Reset Password
- Confirm Password
- Verify Email

## Installation

Clone this repo

    git clone https://github.com/laravel/breeze.git

Create env file and set up your DB connection

    cp .env.example .env

Generate key

    php artisan key:generate

Install packages

    composer install

Run migrations without admins/users

    php artisan migrate

Or run migrations with admins/users

    php artisan migrate --seed

Default password for admin and users is "password"

## References
- [Laravel 9](https://laravel.com)
- [Laravel Breeze](https://laravel.com/docs/9.x/starter-kits#laravel-breeze)

## Contributing

Anyone who wants to make some improvement just make a Pull-Request.

If you can achieve the same goal using Jetstream, please share your solution with me as I am very interested.

## License

The Laravel framework and this repository is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
