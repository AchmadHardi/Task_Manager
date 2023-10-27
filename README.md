# Task Management Web Application

This is a simple web application for managing tasks. It allows users to create, edit, and delete tasks, as well as search for tasks by title and status.

## Table of Contents
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Contributing](#contributing)
- [License](#license)

## Getting Started

### Prerequisites

Before you begin, ensure you have met the following requirements:
- PHP installed on your server.
- Composer for PHP installed.
- A web server (e.g., Apache, Nginx) to serve the application.

### Installation

1. Clone the repository:

    ```shell
    git clone https://github.com/AchmadHardi/Task_Manager.git
    ```

2. Change to the project directory:

    ```shell
    cd task-management-app
    ```

3. Install the project dependencies using Composer:

    ```shell
    composer install
    ```

4. Copy the `.env.example` file to `.env`:

    ```shell
    cp .env.example .env
    ```

5. Generate an application key:

    ```shell
    php artisan key:generate
    ```

6. Configure your database in the `.env` file:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=your_database_host
    DB_PORT=your_database_port
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

7. Run the database migrations to create the necessary tables:

    ```shell
    php artisan migrate
    ```

8. Start the development server:

    ```shell
    php artisan serve
    ```

You can now access the application in your web browser at `http://127.0.0.1:8000`.

## Usage

- Visit `http://127.0.0.1:8000` to see the list of tasks.
- Click on "Create New Task" to add a new task.
- You can edit and delete existing tasks.
- Use the search feature to filter tasks by title and/or status.

## Features

- **List Tasks**: View a list of existing tasks.
- **Create Task**: Add a new task with a title, description, and status.
- **Edit Task**: Update an existing task's details.
- **Delete Task**: Remove a task from the list.
- **Search Task**: Filter tasks by title and/or status.

## Contributing

Contributions are welcome! Please feel free to submit issues and pull requests.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

"# Task_Manager" 
