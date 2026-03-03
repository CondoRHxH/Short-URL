# 🔗 Short URL - PHP

A lightweight and fast URL shortener built with PHP.

Transform long, ugly links into clean and shareable short URLs.

---

## 🚀 Features

- Convert long URLs into short codes
- Redirect short links to original URLs
- Store links in database (MySQL)
- Simple and fast logic
- Clean project structure

---

## 🛠️ Tech Stack

- PHP
- MySQL
- HTML / CSS
- Apache (XAMPP / Laragon)

---

├── cnx/
│ └── index.php
│
├── logs/
│ └── db_error.log
│
├── config.php # Application configuration
├── index.php # Main entry point
└── README.md

## ⚙️ How It Works

1. User submits a long URL.
2. PHP generates a unique short code.
3. Code + original URL are stored in database.
4. When someone visits:
   
   http://yourdomain.com/abc123

   The system fetches original URL and redirects using:

   header("Location: original_url");

---

## ▶️ Installation

1. Clone repository:

   git clone https://github.com/CondoRHxH/Short-URL.git

2. Move project to:

   htdocs (XAMPP)  
   or  
   www (Laragon)

3. Create database:

   CREATE DATABASE shorturl;

4. Import SQL file (if available).

5. Update database credentials in:

   config/database.php

6. Open in browser:

   http://localhost/Short-URL/

---
