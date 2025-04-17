# Laravel Project Setup Guide

This guide provides step-by-step instructions for installing and running the Laravel application locally.

## Prerequisites

Before you begin, ensure you have the following installed on your machine:

-   PHP >= 8.1
-   Composer
-   MySQL or another supported database
-   Node.js and npm (optional, for frontend asset compilation)

## Installation Steps

Follow the steps below to set up the project:

### 1. Clone the Repository

```bash
git clone https://github.com/akimanagabriel/l5-sod-glory-academy-laravel.git
cd l5-sod-glory-academy-laravel
```

### 2. Install PHP Dependencies

Install all backend dependencies via Composer:

```bash
composer install
```

This will download and install all PHP libraries and Laravel packages listed in `composer.json`.

### 3. Set Up Environment File

Duplicate the example `.env` file:

```bash
cp .env.example .env
```

Then configure your environment variables in the `.env` file (especially `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`).

### 4. Generate Application Key

```bash
php artisan key:generate
```

This command sets the `APP_KEY` in your `.env` file, which is used for encrypting data.

### 5. Run Database Migrations

```bash
php artisan migrate
```

This creates all the necessary database tables based on your migration files. Make sure your database is running and the credentials in `.env` are correct.

### 6. Start the Development Server

```bash
php artisan serve
```

This starts the local development server at:

```
http://127.0.0.1:8000
```

## Optional Steps

### Compile Frontend Assets (If using Laravel Mix)

```bash
npm install && npm run dev
```

This installs and compiles the frontend assets (JS/CSS) for development.

## Troubleshooting

-   If you encounter permission issues, try running:

```bash
chmod -R 775 storage bootstrap/cache
```

-   If migrations fail, ensure the database exists and your credentials are correct.
-   Clear cached config if needed:

```bash
php artisan config:clear
php artisan cache:clear
php artisan config:cache
```

---

## License

This project is open-source and available under the [MIT license](LICENSE).
