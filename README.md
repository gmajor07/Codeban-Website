# Codeban Company Limited Website

A modern demo website for **Codeban Company Limited**, a safety, PPE, uniforms, branding, and industrial supply company in Tanzania.

## About

Codeban Company Limited supplies PPE products, safety uniforms, official uniforms, footwear, fire extinguishers, banners, sewing, embroidery, and branding solutions.

## Website Sections

- Home
- About
- Services
- Products
- Clients
- Testimonials
- FAQ
- Contact

## Technologies Used

- HTML
- CSS
- JavaScript
- Bootstrap
- Laravel
- MySQL

## Demo Deployment

For demo, the static frontend can be deployed on **Netlify**.

Laravel admin/CMS and MySQL database should be deployed later on **cPanel hosting**.

## Local Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
Database

Import the provided SQL file into MySQL/phpMyAdmin, then update .env:

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=codeban_cms
DB_USERNAME=root
DB_PASSWORD=
Demo Admin
Email: admin@codeban.co.tz
Password: password123
Contact

Codeban Company Limited
Safety First

Dar es Salaam, Tanzania
Website: www.codeban.co.tz