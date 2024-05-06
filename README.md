# Laravel App with React, Inertia.js, Breeze, and Vite

This application utilizes Laravel, React, Inertia.js, Laravel Breeze, and Vite. Make sure these dependencies are installed before running the application.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/your-repo.git
    ```

2. Navigate to the project directory:

    ```bash
    cd your-repo
    ```

3. Install PHP dependencies:

    ```bash
    composer install
    ```

4. Install JavaScript dependencies:

    ```bash
    npm install
    ```

5. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

6. Generate an application key:

    ```bash
    php artisan key:generate
    ```

7. Configure your database connection in the `.env` file.

8. Migrate the database:

    ```bash
    php artisan migrate
    ```

## Running the app

Build the JavaScript assets using Vite:

```bash
npm run dev
```

Start the development server:
```bash
php artisan serve
```

## Usage

Access the application in your browser at http://localhost:8000.
