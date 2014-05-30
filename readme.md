# Laravel 4 starter app

Using Laravel 4 and Sentry 2

## Installation instructions

cd sites/your-app-name

## Composer

The composer must be updated to install defined Laravel Packages & Dependencys like Jefferey Ways Generator/Sentry 2:

composer update

## App Key

Generate a new authorisation key:

php artisan key:generate

## Database

Create a database and import the SQL file within the /db/ folder

Usually Laravel 4 would require the installation of a migrations table/seed the db however these fucntions have already been completed on the database.

Open: app/config/database

Set database connection
name
utf8_unicode_ci

## Permissions:

chmod 777 app/storage/sessions/

## URL:

Open: app/config/app

Set the correct URL:

'url' => 'http://localhost',

# Logging in

Move to the public folder within your browser

Username: admin@admin.com

Password: admin123

There are by default two user groups setup admin & user.

Senrty 2 documentation:
http://docs.cartalyst.com/sentry-2

## Mail

If you navigate to app/config/mail you need to configure the default mail setup so new users can activate. 

I use my google email to send outgoing emails. Update the from, username and password array:

	'from' => array('address' => '*YOUREMAIL*@gmail.com', 'name' => '*Your Name*'),

	'username' => '*YOUREMAIL*@gmail.com',

	'password' => '*YOURPASS*',

Finally navigate to app/views/emails/auth
This contains the emails that the application will send to a user upon registering/reset/welcome.

*yourname* should be replaced/message changed.	

# Next steps

Jeffery Ways absolutley wonderful generators package that composer installed earlier:
https://github.com/JeffreyWay/Laravel-4-Generators

## Scaffolding

php artisan generate:scaffold cat --fields="author:string, body:text"

Creates a create_cat_table migration, with a name column.
Creates a cat.php model.
Creates a views/cat folder, containing the index, show, create, and edit views.
Creates a database/seeds/CatTableSeeder.php seed file.
Updates DatabaseSeeder.php to run CatTableSeeder
Creates controllers/CatController.php, and fills it with restful methods.
Updates routes.php to include: Route::resource('cat', 'CatController').
Creates a tests/controllers/CatControllerTest.php file, and fills it with some boilerplate tests to get you started.
Creates forms within the views for CRUD operations regarding the cat model.

## Migrate the Schema

http://four.laravel.com/docs/migrations

"Migrations are a type of version control for your database. They allow a team to modify the database schema and stay up to date on the current schema state. Migrations are typically paired with the Schema Builder to easily manage your application's scheme."

The generated cat Schema that was created in the app/database/migrations folder and now be placed into the database

php artisan migrate