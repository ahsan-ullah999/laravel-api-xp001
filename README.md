
# Laravel API xp001

This project is a Laravel API that allows user to interact with post data.
The API provides endpoint to retrieve all posts with associated user data JSON format.


## Features

User and Post models with migration, factories,and seeds.
One-to-one relationship between User and Post.
API controller to fetch all posts with associated user data.


## Installation

Clone the repository.

```bash

  git clone https://github.com/ahsan-ullah999/laravel-api-xp001.git
```
Run composer install to dependencies.

```bash
composer install
```
Configure the .env file with your database credential.
Inside the .env file,you can add your database credential in the following format:
```bash
  DB_DATABASE=api_xp001
  DB_USERNAME=root
  DB_PASSWORD= 
```
Migrate the database.
```bash
 php artisan migrate
```
To seed the database. 
```bash
   php artisan db:seed
  --class=UserSeeder and
  --class=PostSeeder
```
## Usage/Examples

```javascript
Endpoint:/api/posts
Method:get
Description:Return all posts with associated user data in JSON format.

// function App() {
//   return <Component />
// }
```


## Authors

- [Ahsan ullah](https://github.com/ahsan-ullah999)



