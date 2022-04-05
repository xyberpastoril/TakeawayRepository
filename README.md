# TakeawayRepository
An application inspired from Deepstash, where you can store your life takeaways and be reminded by them everytime you open. Implemented in Laravel 8.

## Requirements
- PHP Version >= 7.3. May work in older versions, but I haven't tested it.

## Setup Guide
### 1. Clone GitHub repo for this project locally
```
git clone https://github.com/xyberpastoril/TakeawayRepository.git
```
### 2. `cd` into the `TakeawayRepository` project
```
cd TakeawayRepository
```
### 3. Install Composer Dependencies
```
composer install
```
### 4. Create a copy of `.env` file from `.env.example`. 
The `.env.example` file is already filled with default database information including the name of the database `takeaway_repository`.
```
cp .env.example .env
```
### 5. Generate an app encryption key.
```
php artisan key:generate
```
### 6. Create an empty database named `takeaway_repository`.
This can be done by opening XAMPP, run Apache and MySQL, then create a database to phpMyAdmin.
### 7. Update `.env` values when necessary (Optional)
Just in case your database server's configuration is different from the default `root` and blank password, or the name of the database, you may reflect those changes to the `.env` file.
### 8. Migrate and seed the database
```
php artisan migrate --seed
```
## Default Username and Password (Not implemented yet)
Username: **admin**<br>
Password: **admin**
