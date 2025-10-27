# Unit Converter Calculator

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

> A simple and user-friendly unit conversion calculator built with PHP and MySQL.

This web application allows users to convert between different units of measurement including length, weight, and temperature. The conversion history is stored in a MySQL database for future reference.

## ✨ Features

- **Multiple Conversion Categories:** Convert between units of length, weight, and temperature.
- **User-Friendly Interface:** Clean and intuitive design for easy navigation.
- **Database Integration:** Stores conversion history in MySQL database.
- **Responsive Design:** Works well on both desktop and mobile devices.

---

## 📚 Table of Contents

- [Requirements](#-requirements)
- [Installation with XAMPP](#-installation-with-xampp)
- [Usage](#-usage)
- [Database Setup](#-database-setup)
- [Project Structure](#-project-structure)

---

## 📋 Requirements

- XAMPP (or any PHP server with MySQL)
- PHP 7.0 or higher
- MySQL 5.6 or higher
- Web browser

---

## 🚀 Installation with XAMPP

1. **Install XAMPP**
   - Download XAMPP from [https://www.apachefriends.org/](https://www.apachefriends.org/)
   - Follow the installation instructions for your operating system
   - Start the Apache and MySQL services from the XAMPP Control Panel

2. **Clone or Download the Project**
   - Place the project files in the `htdocs` folder of your XAMPP installation:
     - Windows: `C:\xampp\htdocs\unit-converter`
     - macOS: `/Applications/XAMPP/htdocs/unit-converter`
     - Linux: `/opt/lampp/htdocs/unit-converter`

3. **Set Up the Database**
   - Open your web browser and navigate to `http://localhost/phpmyadmin`
   - Create a new database named `converter_db`
   - Import the `converter_db.sql` file to set up the required tables

4. **Configure Database Connection**
   - Open the `db_connect.php` file
   - Update the database credentials if needed (default XAMPP credentials are usually username: 'root', password: '')

---

## 💻 Usage

1. Start XAMPP and ensure both Apache and MySQL services are running
2. Open your web browser and navigate to:
   ```
   http://localhost/unit-converter
   ```
   (Replace "unit-converter" with the name of your project folder in htdocs)

3. Use the form to:
   - Enter a value to convert
   - Select a conversion category (length, weight, or temperature)
   - Choose the units to convert from and to
   - Click the "Convert" button to see the result

---

## 🗄️ Database Setup

The project uses a MySQL database to store conversion history. The database structure is included in the `converter_db.sql` file.

If you need to manually set up the database, create a table with the following structure:

```sql
CREATE TABLE conversions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    value_from FLOAT NOT NULL,
    unit_from VARCHAR(50) NOT NULL,
    value_to FLOAT NOT NULL,
    unit_to VARCHAR(50) NOT NULL,
    category VARCHAR(50) NOT NULL,
    conversion_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## 📁 Project Structure

- `index.php` - Main application interface
- `convert.php` - Handles the conversion logic
- `db_connect.php` - Database connection configuration
- `converter_db.sql` - SQL file for database setup
- `style.css` - CSS styles for the application