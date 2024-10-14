# Laravel Project Setup Guide

## Requirements

Before starting, ensure that you have the following installed on your system:

- **PHP** (Version 8.2 or higher)
- **Composer** (Dependency Manager for PHP)
- **Node.js** (with NPM, for frontend asset management)
- **XAMPP / MAMP** (or any local server environment)

## Step 1: Install Laravel

1. **Clone the Repository

Start by cloning this repository to your local machine:

```bash
git clone https://github.com/AomSirawit/WorksTracker.git
cd your-repository-name
   
2. **Navigate to the directory where you want to install the project** and run the following command to create a new Laravel project:
   ```bash
   composer create-project --prefer-dist laravel/laravel my-laravel-app
    
3. **Install PHP Dependencies
    ``bash
    composer install

4. **Set Up Environment Configuration
    Copy the .env.example file to .env:

    then

    Update the .env file with your database connection details:

    ``bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=your_port
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password

    then

    ``bash 
    php artisan key:generate

5. **Install Node Dependencies

    ``bash
    npm install

6. **Start the Development Server

    ``bash
    npm run dev

    ``bash
    php artisan serve


    ##Enjoy
