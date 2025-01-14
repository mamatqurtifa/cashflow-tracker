# Cash Flow Tracker

A web application for managing personal cash flow, built with Laravel. This project provides a user-friendly interface to track transactions, categorize expenses, and generate reports, helping users gain insights into their financial health.

## Features

- **User Authentication**: Secure registration and login system using Laravel's built-in authentication.
- **Transaction Management**: Easily add, edit, and delete transactions with details such as amount, date, and category.
- **Categories**: Organize transactions into customizable categories for better tracking and analysis.
- **Reports**: Generate visual reports to analyze spending patterns over time.
- **Responsive Design**: Optimized for both desktop and mobile devices.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/mamatqurtifa/cashflow-tracker.git

2. Navigate into the project directory:
   ```bash
   cd cashflow-tracker
3. Install dependencies:
   ```bash
   composer install

4. Set up your .env file:
   ```bash
   cp .env.example .env
   php artisan key:generate

5. Run database migrations:
   ```bash
   php artisan migrate

6. Start the development server:
   ```bash
   php artisan serve

7. Access the application at http://localhost:8000.
