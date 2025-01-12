# Rental Mobil Wandi Nurjaman

A web-based application to manage car rentals, including managing cars, customers, and rental transactions. This project is built using **PHP**, **MySQL**, and **Bootstrap** for modern and responsive design.

---

## Features

### 1. **Authentication**
   - Secure login system for users.
   - Passwords hashed using MD5 (can be upgraded to more secure hashing like bcrypt).

### 2. **Dashboard**
   - Display summary data: total cars, total customers, total rental transactions.

### 3. **Manage Cars (CRUD)**
   - Add, edit, delete, and view car data.
   - Includes fields like car plate number, car name, brand, and transmission type.

### 4. **Manage Customers (CRUD)**
   - Add, edit, delete, and view customer data.
   - Includes fields like NIK, name, phone number, and address.

### 5. **Manage Rentals (CRUD)**
   - Add, edit, delete, and view rental transactions.
   - Calculates total payment automatically based on rental duration and price per day.

### 6. **Responsive Design**
   - Uses **Bootstrap** for a modern, mobile-friendly interface.

---

## Technologies Used

- **Backend:** PHP
- **Frontend:** HTML, CSS, Bootstrap
- **Database:** MySQL

---

## Installation

### Prerequisites
- A web server (e.g., XAMPP, WAMP, or LAMP).
- PHP version 7.4 or higher.
- MySQL database.

### Steps
1. Clone this repository:
   ```bash
   git clone https://github.com/your-username/rental-mobil.git
   ```

2. Move the project folder to your web server directory (e.g., `htdocs` for XAMPP).

3. Import the database:
   - Open **phpMyAdmin** or any MySQL client.
   - Create a database named `rentalmobil_wandinurjaman`.
   - Import the SQL file `rentalmobil.sql` provided in the project.

4. Configure the database connection:
   - Open `config/koneksi.php` and set the following:
     ```php
     $host = 'localhost';
     $user = 'root';
     $password = '';
     $database = 'rentalmobil_wandinurjaman';
     ```

5. Start the web server and access the application:
   ```
   http://localhost/rental-mobil
   ```

---

## Usage

### Default Admin User
- **Username:** wandi
- **Password:** wandi

---

## File Structure

```
project-root/
├── config/
│   └── koneksi.php          # Database connection
├── templates/
│   ├── header.php           # Header template
│   └── footer.php           # Footer template
├── pages/
│   ├── dashboard.php        # Dashboard page
│   ├── mobil.php            # Car management
│   ├── pelanggan.php        # Customer management
│   ├── rental.php           # Rental management
│   ├── mobil_tambah.php     # Add car
│   ├── mobil_edit.php       # Edit car
│   ├── pelanggan_tambah.php # Add customer
│   ├── pelanggan_edit.php   # Edit customer
│   ├── rental_tambah.php    # Add rental
│   ├── rental_edit.php      # Edit rental
├── assets/
│   ├── css/                 # Custom stylesheets
│   └── js/                  # Custom JavaScript
├── index.php                # Login page
└── rentalmobil.sql          # Database dump
```

---

## Future Enhancements

1. Upgrade password hashing to use `password_hash`.
2. Implement user roles for admin and staff.
3. Add search and filtering functionality to the tables.
4. Generate PDF invoices for rental transactions.

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---