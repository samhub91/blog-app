# 📝 Laravel Blog App

A simple blog application built with Laravel. It allows users to register, log in, create, edit, delete, and view blog posts. Posts can be categorized, and users can search for posts by title or content.

## 🚀 Features

- User registration & authentication (Laravel Breeze)
- Create, read, update, delete (CRUD) blog posts
- Categories for posts (with dropdown)
- Auto-generated slugs
- Search posts by title or body
- RESTful API for posts (JSON responses)
- Bootstrap-styled UI
- Protected routes for authenticated users

## 📂 Folder Structure

- `routes/web.php`: Web routes
- `routes/api.php`: API routes
- `app/Models/`: Eloquent Models
- `app/Http/Controllers/`: Logic for Posts, API, and Authentication
- `resources/views/`: Blade views
- `.env`: Environment variables

## ⚙️ Installation

```bash
git clone https://github.com/samhub91/blog-app.git
cd blog-app
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
