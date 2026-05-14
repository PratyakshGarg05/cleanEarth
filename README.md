# 🌿 CleanEarth — Laravel Project
### Waste Management Solutions | Class Project

---

## 📁 Project Structure

```
cleanearth/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── PageController.php      ← Home, About, Solutions, Awareness
│           └── ContactController.php   ← Contact GET + POST with validation
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php           ← Master layout (nav + footer)
│       └── pages/
│           ├── home.blade.php
│           ├── about.blade.php
│           ├── solutions.blade.php
│           ├── awareness.blade.php
│           └── contact.blade.php
│
├── routes/
│   └── web.php                         ← All URL routes
│
├── public/
│   ├── css/app.css                     ← All styles
│   └── js/app.js                       ← Tab switcher + scroll reveal
│
├── composer.json                        ← Laravel dependencies
├── .env.example                         ← Environment config template
└── README.md
```

---

## 🚀 How to Run on MacBook (Step by Step)

### Step 1 — Install Requirements (one time only)

```bash
# Install Homebrew (if not already installed)
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

# Install PHP 8.2+
brew install php

# Install Composer
brew install composer
```

### Step 2 — Setup the Project

```bash
# Enter the project folder
cd cleanearth

# Install all Laravel dependencies (downloads vendor folder)
composer install

# Copy the environment file
cp .env.example .env

# Generate the app encryption key
php artisan key:generate

# Run database migrations
php artisan migrate
```

### Step 3 — Run the Server

```bash
php artisan serve
```

Open browser → **http://localhost:8000** ✅

---

## ❌ Common Error Fix

**Error:** `Could not open input file: artisan`

**Cause:** You were NOT inside the `cleanearth` folder.

**Fix:**
```bash
# Make sure you are inside the project folder first!
cd cleanearth
ls   # you should see: artisan, composer.json, routes/, etc.

# Then run:
php artisan serve
```

---

## 📄 Pages & Routes

| URL | Controller Method | View |
|-----|-------------------|------|
| `/` | `PageController@home` | `pages/home.blade.php` |
| `/about` | `PageController@about` | `pages/about.blade.php` |
| `/solutions` | `PageController@solutions` | `pages/solutions.blade.php` |
| `/awareness` | `PageController@awareness` | `pages/awareness.blade.php` |
| `/contact` (GET) | `ContactController@index` | `pages/contact.blade.php` |
| `/contact` (POST) | `ContactController@submit` | Redirects with flash message |

---

## ⚙️ Laravel Features Used

- **Blade Templates** — `@extends`, `@section`, `@yield`, `@foreach`, `@if`
- **Named Routes** — `route('home')`, `route('contact')` etc.
- **Controllers** — `PageController`, `ContactController`
- **Form Validation** — `$request->validate([...])` in ContactController
- **CSRF Protection** — `@csrf` in contact form
- **Flash Messages** — `->with('success', ...)` and `session('success')`
- **Old Input** — `old('field_name')` to repopulate form on error
- **Active Nav** — `request()->routeIs('routename')` for active link highlight

---

## 🎨 Design

- **Fonts**: Playfair Display + DM Sans (Google Fonts)
- **Colors**: Deep green `#1a3a2a`, Bright green `#40916c`, Sand `#e9c46a`
- **Fully responsive** — works on mobile, tablet, desktop

---

*© 2025 CleanEarth — Environmental Studies Class Project*
# cleanEarth
