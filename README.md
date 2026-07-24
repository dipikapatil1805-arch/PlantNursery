# PlantNursery

This repository contains the **PlantNursery** full-stack web application developed using **Laravel**. The application allows users to browse plants, view care guides, add plants to a shopping cart, place orders, track orders, and send contact messages through a user-friendly interface.

---

# Project Structure

- **app/** - Contains Laravel controllers, models,and application logic.
- **bootstrap/** - Laravel bootstrap files.
- **config/** - Application configuration files.
- **database/** - Migrations and seeders.
- **public/** - Public assets including plant images.
- **resources/** - Blade views, CSS, and JavaScript files.
- **routes/** - Application routes.
- **storage/** - Application storage and logs.
- **vendor/** - Composer dependencies.

---

# Setup Instructions

## Prerequisites

- PHP 8.2 or above
- Composer
- XAMPP (Apache & MySQL)
- Laravel 12
- Git

---

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/dipikapatil1805-arch/PlantNursery.git
```

### 2. Navigate to the project folder

```bash
cd PlantNursery
```

### 3. Install dependencies

```bash
composer install
```

### 4. Copy environment file

```bash
copy .env.example .env
```

### 5. Generate application key

```bash
php artisan key:generate
```

### 6. Configure the database

Open the **.env** file and update:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=plantnursery
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Run migrations

```bash
php artisan migrate
```

### 8. Seed sample plant data (Optional)

```bash
php artisan db:seed --class=PlantSeeder
```

### 9. Start the Laravel server

```bash
php artisan serve
```

The application will be available at:

```
http://127.0.0.1:8000
```

---

# Features

- Plant Catalog
- Search Plants
- Category Filter
- Plant Care Guide
- Shopping Cart
- Place Orders
- Order Tracking
- Contact Form
- Responsive Design
- MySQL Database Integration

---

# Technologies Used

- Laravel 12
- PHP
- MySQL
- Bootstrap 5
- HTML5
- CSS3
- Blade Template Engine
- Eloquent ORM

---

# Database

The project uses **MySQL** with the following tables:

- plants
- carts
- orders
- contacts
- users

---

# Building for Production

Optimize the application using:

```bash
php artisan optimize
```

Clear cache if required:

```bash
php artisan optimize:clear
```

---

# Deployment

The application can be deployed on platforms such as:

- Hostinger
- InfinityFree
- Render
- Railway
- Any PHP and MySQL hosting provider

Ensure the database credentials and environment variables are correctly configured before deployment.

---

# Contributing

1. Fork the repository.
2. Create a feature branch:

```bash
git checkout -b feature-name
```

3. Commit your changes:

```bash
git commit -m "Added new feature"
```

4. Push the branch:

```bash
git push origin feature-name
```

5. Create a Pull Request.

---

# License

This project is developed for educational purposes.

---

## Project Information

**Project Name:** PlantNursery

**Subtitle:** Online Plant Shop with Care Guide & Order Tracking

**Domain:** AgriTech

**Framework:** Laravel