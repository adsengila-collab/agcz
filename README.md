# Laravel Inertia React Project

## Installation and Setup Instructions

This guide will help you set up a Laravel Inertia React project without a database.

### Prerequisites
- PHP 8.0 or higher
- Composer
- Node.js 14.x or higher
- NPM or Yarn

### Steps to Set Up

1. **Clone the repository**
   ```bash
   git clone https://github.com/adsengila-collab/agcz.git
   cd agcz
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   # or
   yarn install
   ```

4. **Build Assets**
   ```bash
   npm run dev
   # or for production
   npm run build
   ```

5. **Run the application**
   ```bash
   php artisan serve
   ```
   Your application will be served at `http://localhost:8000`

### Notes
- This project is setup to run without a database. You can add additional configurations as needed.

### License
- MIT License

## Acknowledgements
- Inspired by Laravel and Inertia.js documentation.