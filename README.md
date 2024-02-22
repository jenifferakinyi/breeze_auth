# Apex CRM Application

## Overview

Apex CRM is a comprehensive Customer Relationship Management (CRM) application built with Laravel. It provides a suite of tools for managing customer interactions, tracking leads, and monitoring sales. The application is designed to streamline business operations and improve customer relationships.

## Features

-   Organization Management: Track and manage customer organizations.
-   User Management: Manage user profiles and permissions.
-   Contact Management: Maintain contact information for organization contacts.
-   Quote Management: Create and manage quotes for potential deals.
-   Invoice Management: Generate and manage invoices for completed deals.
-   Activity Tracking: Monitor user activities and tasks.
-   Deal Management: Track the sales process from lead to close.

## Installation

### Prerequisites

-   PHP 8 or higher
-   Laravel 10.x or higher
-   Composer
-   MySQL or PostgreSQL database

### Steps

1. **Clone the Repository**

    ```
    git clone https://github.com/Peter-Vulpes/CRM_basic.git
    ```

2. **Install Dependencies**

    ```
    composer install
    ```

3. **Configure Environment**
   Rename `.env.example` to `.env` and update the database connection details:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=apex_crm
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. **Generate Application Key**

    ```
    php artisan key:generate
    ```

5. **Run Migrations**

    ```
    php artisan migrate
    ```

6. **Seed Data (Optional)**
   If you want to seed initial data for testing, run:
    ```
    php artisan db:seed
    ```

## Migrations

The CRM application includes the following migrations:

-   Organizations Table
-   Users Table
-   Contacts Table
-   Quotes Table
-   Invoices Table
-   Quote_items Table
-   Invoice_items Table
-   Activities Table
-   Deals Table
-   Deal_stages Table

Each migration corresponds to a table in the database, and they are responsible for creating the necessary schema.

## Usage

After installation, you can access the CRM application by navigating to the root URL of your Laravel application.

## Development

For developers looking to contribute or extend the CRM functionality, you can use the Laravel module maker to generate CRUD modules quickly. Install it using:

```
composer require nwidart/laravel-modules
```

And then generate a CRUD module with:

```
php artisan make:module <name of module>
```

Or

use laravel filament

```
composer require filament/filament
```

Then

```
php artisan filament:install --panels
```

## Testing

To run the test suite, execute:

```
composer test
```

## Security

If you discover any security-related issues, please email the maintainer instead of using the issue tracker.

## License

The Apex CRM application is open-source software licensed under the MIT License. Please see the [License File](LICENSE.md) for more information.
