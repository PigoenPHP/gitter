# PHP Secure Authentication System

A secure, modular REST API and authentication system built with modern PHP 8+, PDO prepared statements, Bootstrap 5, and vanilla JavaScript Fetch API.

## Features

- **Secure Authentication**: User registration, login, logout with secure session management and password hashing (`password_hash`).
- **Database Security**: MySQL schema using PDO prepared statements against SQL injection.
- **Frontend UI**: Responsive Bootstrap 5 forms with accessibility and validation.
- **Async Interactions**: Native Fetch API integration with loading states and structured JSON error responses.

## Installation & Setup

1. Clone or copy the repository.
2. Import the database schema from `database/schema.sql` into MySQL.
3. Configure your database settings in `config/database.php`.
4. Run a local PHP server pointing to the `public/` directory:
   ```bash
   php -S localhost:8000 -t public/
   ```
5. Open `http://localhost:8000` in your browser.
