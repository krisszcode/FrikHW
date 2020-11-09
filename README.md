# Frik Homework

### Installation

1. Install XAMPP.
2. Start Apache and MySQL.
3. Go to localhost/phpmyadmin.
4. Create a new database with name "frik" utf8_general_ci encode type.

### First task
1. run php -S localhost:{your port}
2. You must submit an url.

### Second

1. run composer install & npm install
2. in the .env file you must change your db settings
3. php artisan migrate
4. php artisan serve


### Third
 The third will be the same as the second, but you have to run:
 1. php artisan migrate
2. php artisan websocket:serve