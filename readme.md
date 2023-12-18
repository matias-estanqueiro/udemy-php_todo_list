# ToDo List

## Functionality Description

The ToDo List application streamlines task management, enabling users to efficiently add, delete, and update task titles. Users input the title of a new task through a simple form in the interface, with options to delete and update each listed task. The application utilizes a MySQL database to store tasks, providing a comprehensive solution for organizing and keeping track of pending activities.

## Project structure

-   **Public:** Contains publicly accessible files.

    -   `index.php`: The main page of the ToDo List application. Users can add new tasks, view existing tasks, and perform actions like updating and deleting tasks.
    -   `style.css`: Contains the basic styling for the application, ensuring a clean and consistent user interface.

-   **src:** Contains PHP source files.

    -   **config:** Configurations and files related to the database.

        -   `conn.php`: Manages the database connection. Configures the connection to a MySQL database using provided credentials.

    -   **controllers:** PHP controllers to handle application logic.

        -   `delete.php`: Handles the deletion of tasks. Retrieves the task ID from the URL and deletes the corresponding task from the database.

        -   `insert.php`: Manages the insertion of new tasks. Retrieves the task name from the form and inserts it into the tasks table in the database.
        -   `update.php`: Handles the updating of tasks. Retrieves the task ID from the URL, fetches the corresponding task details, and updates the task in the database based on user input.

## Features

-   Task Management: Add, delete, and update tasks seamlessly using the user-friendly interface.
-   Dynamic Task List: Display a dynamic list of tasks fetched from the MySQL database, allowing users to interact with their tasks efficiently.
-   Responsive Design: Ensure a responsive design using Bootstrap, making the application accessible on various devices.

## Installation

#### Pre-requisites:

-   Web server (e.g., Apache)
-   MySQL database server
-   PHP installed on the server

1. Clone the repository:

-   git clone https://repository-url.git

2. Configure the database by editing src/config/conn.php with your credentials.
3. Open Public/index.php in your browser to launch the application.

## Important Note!

-   This application is a basic example and does not implement advanced security measures. It is recommended to perform validations and filter data before conducting operations on a database in a production environment.

## Authors

-   [@MatiasEstanqueiro](https://www.github.com/matias-estanqueiro)
