# Event Management System

A comprehensive Event Management System developed using Laravel 10, HTML, JavaScript, CSS, MySQL, and XAMPP. This system includes two dashboards: one for administrators and one for vendors.

## 📋 Features

### Admin Dashboard

-   **Dashboard Calendar:** Manage and schedule upcoming events.
-   **Client Panel:** Accept or reject client event requests, view and manage client requirements and details.
-   **Vendor Panel:** Handle vendor requests and manage orders.
-   **Feedback Panel:** View and respond to client reviews and feedback.
-   **Package Management:** Create and manage event packages with predefined services and pricing.

### Vendor Dashboard

-   **Dashboard Calendar:** Manage and view upcoming events.
-   **Profile Management:** Update and manage vendor account information.
-   **Service Management:** Add and manage services provided by the vendor.
-   **Service Details:** View and edit service details.

## 🛠️ Technologies Used

-   **Backend:** Laravel 10
-   **Frontend:** HTML, CSS, JavaScript
-   **Database:** MySQL
-   **Local Development Environment:** XAMPP

## 🚀 Getting Started

### Prerequisites

-   Laravel 10
-   PHP 7.x or higher
-   MySQL
-   XAMPP (or a similar local server environment)

### Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/event-management-system.git
    ```
2. **Navigate to the project directory:**
    ```bash
    cd event-management-system
    ```
3. **Install dependencies:**
    ```bash
    composer install
    ```
4. **Set up the environment:**
    - Copy `.env.example` to `.env` and configure your database settings.
    - Generate the application key:
        ```bash
        php artisan key:generate
        ```
5. **Run migrations:**
    ```bash
    php artisan migrate
    ```
6. **Start the Server:**
    ```bash
    php artisan serve
    ```
    - Navigate to `http://localhost:8000` to access the application.

## 📂 Project Structure

-   `app/`: Contains Laravel application code (controllers, models, views).
-   `resources/views/`: Blade templates for the frontend.
-   `routes/web.php`: Defines application routes.
-   `public/`: Publicly accessible files (CSS, JavaScript).
-   `database/migrations/`: Migration files for database schema.

## 🤝 Contributing

Contributions are welcome! If you have suggestions or improvements, please open an issue or submit a pull request.

## 📧 Contact

For questions or feedback, contact me at [khushikoriya.connect@gmail.com].
