<p align="center">
  <img src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/tailwindcss-%2306B6D4.svg?style=for-the-badge&logo=tailwindcss&logoColor=white" />
</p>

# ViboraUK Sports E-Commerce Platform

ViboraUK is a modern sports-focused e-commerce web application built with Laravel. It provides users with a smooth, responsive, and user-friendly online shopping experience for a range of sports products.

## Project Overview

The aim of ViboraUK is to create a clean and intuitive e-commerce platform where users can browse sports products by category, explore items easily, and interact with a modern web interface. The project focuses on responsive design, structured backend development, and a scalable Laravel-based architecture.

## Features

- **User Authentication**: Secure login and registration system.
- **Product Catalogue**: Browse sports-related products by category.
- **Category-Based Navigation**: Dedicated sections for Rackets, Sportswear, Shoes, Balls, and Bags.
- **Responsive Design**: Fully responsive layout using Tailwind CSS.
- **Modern UI**: Clean and user-friendly design for a better shopping experience.
- **Laravel Framework**: Structured and maintainable backend built with Laravel.
- **Vite Integration**: Fast frontend asset building and development workflow.

## Product Categories

The platform includes dedicated sections for:

- **Rackets**
- **Sportswear**
- **Shoes**
- **Balls**
- **Bags**

## Tech Stack

### Backend
- Laravel 11
- PHP 8.2+

### Frontend
- Blade Templates
- Tailwind CSS 4
- Vite 7
- JavaScript
- Axios

### Development Tools
- Composer
- NPM
- PHPUnit

## Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL or SQLite

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/f4yette/group18.git
   cd group18
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install Node dependencies:**
   ```bash
   npm install
   ```

4. **Set up environment variables:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Configure your database credentials in `.env`.

5. **Run migrations and seed the database:**
   ```bash
   php artisan migrate --seed
   ```

6. **Build frontend assets:**
   ```bash
   npm run build
   ```

7. **Serve the application:**
   ```bash
   php artisan serve
   ```

## Development Commands

Run the development environment:

```bash
composer run dev
```

Run tests:

```bash
composer run test
```

## Test User Credentials

To access the platform for testing purposes, you can use the default seeded account:

| Role | Email | Password |
| :--- | :--- | :--- |
| User | **test@vibora.com** | **password** |

## Project Structure

- `app/Http/Controllers`: Contains the application logic.
- `resources/views`: Blade templates for the user interface.
- `routes/web.php`: Application routes.
- `database/seeders`: Seeders for populating the database with initial data.
- `resources/css`: Styling files.
- `resources/js`: Frontend JavaScript files.

## Contributing

1. Fork the repository.
2. Create your feature branch:
   ```bash
   git checkout -b feature/AmazingFeature
   ```
3. Commit your changes:
   ```bash
   git commit -m 'Add some AmazingFeature'
   ```
4. Push to the branch:
   ```bash
   git push origin feature/AmazingFeature
   ```
5. Open a Pull Request.

## Group 18

### Members
- Ahmed Ahned : 230176647

<sup><sub>This project was developed by Group 18 as part of an academic coursework project.</sub></sup>
