# AutoDelovi E-Commerce Platform

Welcome to the AutoDelovi E-Commerce Platform! This project is aimed at providing a seamless online shopping experience for customers looking to purchase car accessories. Built with Laravel and utilizing various frontend technologies, AutoDelovi offers a user-friendly interface for browsing, purchasing, and managing car accessories.

## Features

-   Browse a wide range of car accessories conveniently categorized for easy navigation.
-   Add products to your cart and proceed to checkout securely.
-   View detailed product information and images to make informed purchasing decisions.
-   Leave comments and reviews on products to share your experiences with other users.
-   Manage your account, including profile information, order history, and preferences.

## Database Structure

The database for AutoDelovi is designed using Entity Framework Code First methodology. Here's an overview of the main tables:

-   **Products**: Stores information about car accessories, including name, description, price, and image URL.
-   **Purchases**: Records transactions when users buy products, including purchase date and quantity.
-   **SoldProducts**: Tracks products that have been sold, including sale date and quantity.
-   **Cart**: Stores products added to users' shopping carts.
-   **Brands**: Contains information about brands associated with products.
-   **Vehicle**: Stores details about vehicles or car accessories.
-   **Users**: Manages user accounts, including login credentials and personal details.
-   **Comments**: Allows users to leave comments and reviews on products.
-   **Categories**: Categorizes products into different categories.

## Requirements

Before setting up the AutoDelovi project locally, ensure you have the following software installed:

-   **XAMPP**: Apache web server with MySQL database. [Download and install XAMPP](https://www.apachefriends.org/index.html) for your operating system.
-   **Node.js**: JavaScript runtime environment. [Download and install Node.js](https://nodejs.org/) for your operating system.
-   **Composer**: Dependency manager for PHP. [Download and install Composer](https://getcomposer.org/) for your operating system.
-   **Laravel CLI**: Command-line interface for Laravel. Install globally via Composer:

```bash
  composer global require laravel/installer
```

## Setting Up the Project Locally

To set up the AutoDelovi project locally, follow these steps:

1. **Clone the Repository:**

```bash
git clone https://github.com/Striker1101/AutoDelovi
```

2. **Navigate to the Project Directory:**

```bash
cd AutoDelovi
```

3. **Install Dependencies:**

```bash
composer install
npm install
```

4. **Set Up Environment Variables:**

Copy the .env.example file and rename it to .env.

```bash
cp .env.example .env
```

Update the database configuration in the .env file with your database credentials. 5. **Generate Application Key:**

```bash
php artisan key:generate*
```

6. **Run Migrations:**

```bash
php artisan migrate
```

7. **Seed the Database (Optional):**

```bash
php artisan db:seed
```

8. **Start the Development Server:**

```bash
php artisan serve
```

9. **Access the Application:**
   Open your web browser and navigate to http://localhost:8000 to access the AutoDelovi E-Commerce Platform.

10. **Contributing:**
    Contributions to the AutoDelovi project are welcome! Please feel free to submit bug reports, feature requests, or pull requests to help improve the platform.

11. **License:**
    This project is licensed under the MIT License.
