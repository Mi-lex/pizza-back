# pizza-back

For local deplyment of the app, make sure you have php >= 7.2.0 and composer installed.

`composer`, 
`php -v` 

There should also be mysql database.

1. run 
`git clone https://github.com/Mi-lex/pizza-back.git pizza-app`
`cd pizza-app`

2.Switch to the deployment branch:
`git checkout fullapp`

3. install all php packages
`composer install`

4. while packages are being downloaded, create **.env** file. Here is link to the example from official laravel repository
[env.example](https://github.com/laravel/laravel/blob/master/.env.example);

5. generate key:
`php artisan key:generate`

6. Make sure that DB key in .env file are relavent

7. run migrations and seed db
`php artisan migrate --seed`

8. Open resources\views\app.blade.php and change secure_asset() to asset()

9. run a server
`php artisan serve`

10. go to the http://127.0.0.1:8000
