# 🌐 LinguaLink — Language School Platform

A full-stack web application for **LinguaLink**, a language school offering courses, exam preparation, and internationally recognised language certification exams. Built with Laravel 12, Tailwind CSS, and Alpine.js.

---

## ✨ Features

- 🌍 **Bilingual support** — Full Macedonian and English localisation across all pages
- 📚 **Course catalogue** — Filterable, categorised course listings with a carousel UI
- 🎓 **Exam management** — Detailed exam pages with structure, CEFR levels, and exam date calendar
- 📝 **Exam preparation** — Accordion-style prep course listings grouped by language and exam group
- 🧠 **Personalisation** — Course recommendations based on user preferences
- 📅 **Exam registration** — Modal-based registration form with date selection
- 👤 **User authentication** — Login, register, forgot/reset password
- 🔒 **Admin panel** — Filament-powered admin for managing exams, courses, prep content, and registrations
- 📱 **Responsive design** — Mobile-first with a slide-out navigation menu
- 💬 **Testimonials** — Client reviews with star ratings
- ❓ **FAQ section** — Collapsible frequently asked questions

---

## 🛠 Tech Stack

| Layer | Technology |
|---|---|
| Backend | Laravel 12 (PHP 8.4) |
| Frontend | Blade, Tailwind CSS, Alpine.js |
| Admin | Filament v3 |
| Database | MySQL |
| Image hosting | ImageKit |
| Auth | Laravel Breeze |

---

## 🚀 Getting Started

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & npm
- MySQL

### Installation

```bash
# Clone the repository
git clone https://github.com/analazarevska1/ling-link.git
cd ling-link

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Configure your database in .env, then run migrations
php artisan migrate

# Seed the database
php artisan db:seed --class=ExamSeeder
php artisan db:seed --class=ExamPrepSeeder

# Build assets
npm run build

# Start the development server
php artisan serve
```

---

## 🗄 Database Seeders

| Seeder | Description |
|---|---|
| `ExamSeeder` | Seeds 5 exams (TELC, TestDaF, TestAS, OnSET, LanguageCert) with levels, structure parts and exam dates |
| `ExamPrepSeeder` | Seeds exam preparation courses grouped by language and exam group |

---

## 🌐 Localisation

Language files are located in `lang/mk/` and `lang/en/`. Supported keys cover:

- Navigation (`nav.php`)
- Courses (`courses.php`)
- Exams (`exams.php`)
- Modals (`modal.php`)
- Auth pages (`auth.php`)

Switch language via the `MKD | EN` toggle in the navbar.

---

## 📁 Project Structure

```
├── app/
│   ├── Filament/Resources/     # Admin panel resources
│   ├── Models/                 # Eloquent models
│   └── Services/               # ImageKit service
├── database/
│   ├── migrations/
│   └── seeders/
├── lang/
│   ├── en/
│   └── mk/
├── resources/
│   └── views/
│       ├── courses/
│       ├── exams/
│       └── parts/              # Shared partials (nav, footer, modals)
└── routes/
    └── web.php
```

---

## 👩‍💻 Developer

Built by **Ana Lazarevska** and **Martina Gogova**

---

## 📄 License

This project is proprietary software for LinguaLink. All rights reserved.