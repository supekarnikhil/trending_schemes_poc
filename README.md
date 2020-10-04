## About this project

The base of this project is generated with laravel.
To run this project please follow the below instructions.
 - Run composer install in the root directory of the project.
 - copy .env.example file to .env
 - create a database for this project and update the database credentails in .env file.
 - to create all required tables in the above database, run this command in terminal: `php artisan migrate:refresh --seed`
 - to start the project run this command: `php artisan serve`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).