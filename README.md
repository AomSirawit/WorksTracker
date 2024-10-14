# Larave Project Setup Guide

## Requirements

Before starting, ensure that you have the following installed on your system:

- **PHP** (Version 8.2 or higher)
- **Composer** (Dependency Manager for PHP)
- **Node.js** (with NPM, for frontend asset management)
- **XAMPP / MAMP** (or any local server environment)

### 1.  Clone the Repository

Start by cloning this repository to your local machine:

    git clone https://github.com/AomSirawit/WorksTracker.git 
    cd your-repository-name
### 2.  Install PHP Dependencies

      composer install
### 3.  Set Up Environment Configuration
 Copy the .env.example file to .env:
 Update the .env file with your database connection details:

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=your_port
        DB_DATABASE=your_database_name
        DB_USERNAME=your_database_user
        DB_PASSWORD=your_database_password

then :

```php
 php artisan key:generate
```
### 4.  Install Node Dependencies

```javascript
  npm install
```
### 5.  Start the Development Server

```javascript
 npm run dev
```
then:

```php
 php artisan serve
```

#Enjoy

