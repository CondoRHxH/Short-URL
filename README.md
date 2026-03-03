# 🔗 Short URL - PHP

A lightweight and fast URL shortener built with PHP. Transform long, ugly links into clean and shareable short URLs.

---

## 🚀 Features

* **URL Conversion:** Convert long URLs into unique short codes.
* **Redirection:** Instant redirect from short links to original destinations.
* **Database Integration:** Securely store links using MySQL.
* **Performance:** Simple, fast, and lightweight logic.
* **Organization:** Clean and modular project structure.

---

## 🛠️ Tech Stack

* **Language:** PHP
* **Database:** MySQL
* **Frontend:** HTML / CSS
* **Server:** Apache (XAMPP / Laragon / WAMP)

---

## 📂 Project Structure

```text
Short-URL/
├── cnx/
│   └── index.php       # Database connection logic
├── logs/
│   └── db_error.log    # Error tracking
├── config.php          # Application configuration
├── index.php           # Main entry point & Logic
└── README.md           # Documentation

---

## ⚙️ How It Works

1. User submits a long URL.
2. PHP generates a unique short code.
3. Code + original URL are stored in database.
4. When someone visits:
   
   http://yourdomain.com/abc123

   The system fetches original URL and redirects using:

   header("Location: original_url");

---