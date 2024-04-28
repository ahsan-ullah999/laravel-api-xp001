
# Laravel API xp001

This project is a Laravel API that allows user to interact with post data.
The API provides endpoint to retrieve all posts with associated user data JSON format.


## Features

User and Post models with migration, factories,and seeds.
One-to-one relationship between User and Post.
API controller to fetch all posts with associated user data.


## Installation

Clone the repository.
Run composer install to dependencies.
Configure the .env file with your database credential.
Migrate the database.To seed the database.Access the API endpoints to interact with the data.

```bash
  git clone https://github.com/ahsan-ullah999/laravel-api-xp001.git
  composer install
  Inside the .env file,you can add your database credential in the following format:
  DB_DATABASE=api_xp001
  DB_USERNAME=root
  DB_PASSWORD= 
  php artisan migrate
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



