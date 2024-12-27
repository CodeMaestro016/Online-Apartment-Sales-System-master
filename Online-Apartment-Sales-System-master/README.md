# Online Apartment Sales System

![apartment](https://github.com/user-attachments/assets/416fb5f1-66d1-4d0b-86e3-44350cbca960)

Welcome to the **Online Apartment Sales System**! This web application enables users to manage editors, users, and perform CRUD operations efficiently. Built with a robust backend in PHP and a simple yet responsive frontend in HTML and CSS, this system provides an intuitive experience for managing users and editors.

---

## Table of Contents
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributing](#contributing)
- [License](#license)

---

## Features

- **Simple CRUD Operations**: Perform Create, Read, Update, and Delete operations for users and editors.
- **User Management**: Add, update, and delete users from the system.
- **Editor Management**: Add new editors, update their details, and delete editors as required.
- **View All Users**: Access a comprehensive list of all users registered in the system.

---

## Technologies Used

### Frontend:
- **HTML5**: For the structure of the web pages.
- **CSS3**: For styling and responsive designs.

### Backend:
- **PHP**: For server-side logic and database interaction.
- **MySQL**: For storing user and editor data.

---

## Installation

Follow these steps to set up the Online Apartment Sales System on your local machine:

### Prerequisites:
- Install **XAMPP** (or any similar PHP server with MySQL support).
- A modern web browser for testing (e.g., Chrome, Firefox).

### Steps:
1. Clone the repository:
   ```bash
   git clone https://github.com/your-repo/online-apartment-sales-system.git
   ```
2. Copy the project folder to your server's root directory (e.g., `htdocs` for XAMPP).
3. Start the Apache and MySQL services in XAMPP.
4. Import the database:
   - Open `phpMyAdmin`.
   - Create a new database (e.g., `apartment_sales`).
   - Import the `database.sql` file located in the `db` folder.
5. Update the database connection in `configAdminparts.php`:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "apartment_sales";
   ```
6. Open the application in your browser:
   ```
   http://localhost/online-apartment-sales-system
   ```

---

## Usage

1. **Home Page**: Navigate to the system home page to access available features.
2. **Add Editors**: Add new editors to the system using the "addadmin" page.
3. **View Users**: Access the "adminpanel" to view all users in the system.
4. **Update Editors**: Update editor details through forms provided in the system.
5. **Delete Users and Editors**: Remove users or editors as needed.
6. **Login and Registration**: Access the "adminlogin" page for authentication and "registeras" for new user registrations.

---

## File Structure

```
Online-Apartment-Sales-System/
├── Images/                        # Contains all project images
├── Styles/                        # CSS stylesheets for the system
├── Js/                            # JavaScript files (if applicable)
├── addadmin.php                   # Add editor page
├── configAdminparts.php           # Database configuration
├── adminpanel.html                # Admin panel to view all users
├── adminlogin.html                # Admin login page
├── home.html                      # Home page
├── home2.html                     # Alternate home page
├── registeras.html                # User registration page
├── loginas.html                   # Login page for users
└── README.md                      # Project documentation
```

---

## Contributing

Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a new branch for your feature or bugfix:
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes and push the branch:
   ```bash
   git commit -m "Add new feature"
   git push origin feature-name
   ```
4. Create a pull request.

---

## License

This project is licensed under the [MIT License](LICENSE).

---

### Acknowledgments

Special thanks to everyone who contributed to the development of this project.
