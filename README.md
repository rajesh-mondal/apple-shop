## Apple Shop - E-commerce Platform

## 💡 Problem & Initial Idea

The project was conceived to modernize the retail experience for both vendors and customers:

* **Traditional retailers** often struggle to showcase their full inventory effectively and manage orders across various brands.
* **Customers** need a centralized, secure, and user-friendly platform to discover products, compare brands, and make safe digital payments.
* **Manual invoicing** and payment tracking are prone to errors and consume significant administrative time.
* The system needs to provide a **data-driven approach** to categorize products (popular, trending, etc.) so business owners can optimize their stock based on real-time user interest.

## 🌐 Project Description

This is a robust, **full-stack E-commerce platform** built with **Laravel**, designed to provide a seamless shopping experience. It features a dynamic product discovery engine, a secure member portal with **OTP-based authentication**, and a fully integrated payment workflow.

The system is optimized for performance and scalability, utilizing a **relational database** to manage complex relationships between brands, categories, and products, while ensuring financial integrity through automated invoicing and **SSLCommerz integration**.


## 🚀 Key Features


### 1. User Authentication & Profile

Focuses on creating a secure, personalized environment for shoppers.

- **Secure Login:** Implementation of a 2-step **OTP-based login system** for secure access.

- **Profile Management:** Full-stack development for managing user details, shipping addresses, and viewing order history.

- **Wishlist & Cart:** Personalized lists that allow users to save items for later or manage products ready for purchase.

- **Reviews & Ratings:** Users can leave detailed feedback and ratings on products.


### 2. Product & Inventory Discovery

Advanced tools to help users find exactly what they are looking for.

- **Dynamic Catalog:** Products organized by Brand and Category with detailed attributes (price, stock status, descriptions).

- **Advanced Search:** Filter and sort products based on various criteria to find exactly what you need.

- **Smart Remarking:** Automated sections for `Popular`, `New`, `Trending`, and `Special` products to drive engagement.

- **Interactive UI:** High-quality image sliders and responsive grids for an optimal browsing experience across all devices.


### 3. Transactions & Payments

Ensuring a reliable and professional checkout process.

- **SSLCommerz Integration:** Secure payment gateway for seamless and encrypted transactions.

- **Automated Invoicing:** Real-time generation of detailed, downloadable PDF invoices for every successful transaction.

- **Transaction Tracking:** Implementation of IPN (Instant Payment Notification) to ensure the backend stays synchronized with payment provider statuses.



## 🗄️ Database Schema

The system utilizes a relational database design with the following key tables:

- **Users & Profiles:** `users`, `customer_profiles`.
- **Catalog:** `products`, `categories`, `brands`, `product_details`. 
- **Sales:** `invoices`, `invoice_products`, `product_carts`, `product_wishes`.
- **Feedback:** `product_reviews`.
- **Settings:** `product_sliders`, `sslcommerz_accounts`, `policies`.


## 🔌 API Endpoints

The following endpoints facilitate the communication between the front-end interface and the Laravel back-end.

| Category | Actions | 
| :--- | :--- | 
| **Brands/Categories** | List Brands, List Categories |
| **Products** | List by Category/Remark/Brand/Keyword, View Details |
| **User** | Login, Verify Login, Profile (Read/Create/Update), Logout |
| **Cart/Wishlist** | Create, Update, Read, and Delete lists |
| **Payments** | Initiate Payment, Success/Cancel/Fail Callbacks, IPN |


### 🛠 Technical Highlights

- **Language & Framework:** PHP 8.2+, Laravel (Eloquent ORM, Blade Templates).  
- **Database Migration:** Laravel Migrations for versioned schema and relationship control.  
- **Security:** 2-Step OTP Authentication, Middleware-based Route Protection, CSRF/XSS protection.  
- **Integration:** SSLCommerz Sandbox API for secure payment processing and IPN handling.
- **Performance:** Database Indexing and Optimized JSON API responses.
- **Frontend:** Bootstrap 5, AJAX for real-time interactions, Dynamic Product Sliders.


## ⚙️ Installation and Setup

Follow these steps to get a local copy of the project up and running.

### Prerequisites

* PHP (version 7 or higher)
* Composer
* A database system (MySQL, PostgreSQL, etc.)
* Node.js & npm (for front-end assets)

### 1. Clone the repository

```bash
git clone https://github.com/rajesh-mondal/apple-shop.git
cd apple-shop
```

### 2. Install Dependencies
Install the backend dependencies using Composer:
```bash
composer install
```

### 3. Environment Configuration
1. Copy the example environment file:
```bash
cp .env.example .env
```

2. Generate a unique application key:
```bash
php artisan key:generate
```

3. Generate a unique application key:
Edit the `.env` file and update your database credentials, JWT secret (if required), and any other necessary configuration:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=apple_shop
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Database Setup
Run the migrations to create the necessary tables 
```bash
php artisan migrate
```

### 4. Running the Application
Start the Laravel development server: 
```bash
php artisan serve
```
The application will typically be available at `http://127.0.0.1:8000`.
