# PizzaApp (Back)

Web application for ordering pizza, which contains a shopping cart. Besides pizza, there are another available items in the menu.
App provide an opportunity for checking out an order, taking delivery address and contact details (phone number).
Login is not required but could be available for checking the history of orders. 
This repository is back-end part of SPA application. Frontend version locates [here](https://github.com/Mi-lex/pizza-back).

### Prerequisites

For local deplyment of the app, make sure you have php >= 7.2.0, mysql and composer, installed.

`composer`, 
`php -v` 

## Deployment

1. run 
`git clone https://github.com/Mi-lex/pizza-back.git pizza-app`
`cd pizza-app`

2. Switch to the deployment branch:
`git checkout fullapp`

3. install all php packages
`composer install`

4. while packages are being downloaded, create **.env** file. Here is link to the example from official laravel repository
[env.example](https://github.com/laravel/laravel/blob/master/.env.example);

5. generate key:
`php artisan key:generate`

6. make sure that DB key in .env file are relavent

7. run migrations and seed db
`php artisan migrate --seed`

8. open resources\views\app.blade.php and change secure_asset() to asset()

9. run a server
`php artisan serve`

10. go to the http://127.0.0.1:8000

## Built With

* [Laravel](https://github.com/laravel/laravel) - The framework used
