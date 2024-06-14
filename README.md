

# Online Examination System (OES)

Welcome to the Online Examination System (OES) repository! This system is designed to facilitate online examinations for students with an easy-to-use interface for both administrators and students.



## Installation

Follow these steps to install the Online Examination System:

1. Clone the repository:
   ```sh
   git clone https://github.com/your-username/OES.git
   ```

2. Navigate to the project directory:
   ```sh
   cd OES
   ```

3. Create a MySQL database and set a name for it.

4. Find the `database` folder, locate the SQL file, and import it into phpMyAdmin or MySQL to create the necessary database structure.

5. Configure the `conn.php` file:
   - Change the database credentials (username, password) and database name according to your setup.

6. Open your preferred web browser and visit:
   - For the admin panel: `http://localhost/OES/admin`
   - For student login: `http://localhost/OES/`

## Usage

### Admin Panel:
- Access the admin panel using the following credentials:
  - Username: `admin@username`
  - Password: `admin@password`
- Admins can:
  - Create, edit, and delete exams.
  - Manage questions and answers.
  - View and export exam results.

### Student Login:
- Students can log in using their credentials provided by the administrator.
- They can take exams, view their scores, and review past exam results.

## Features

- Secure authentication for both admins and students.
- User-friendly interface for easy navigation.
- Comprehensive admin panel for managing exams and results.
- Ability to add various types of questions (multiple-choice, true/false, etc.).
- Instant feedback and results upon completing exams.
- Utilizes AJAX for seamless interactions and enhanced user experience.
- Developed using the CodeIgniter framework for efficient and scalable web application development.

## Contributing

Contributions are welcome! If you find any bugs or have suggestions for improvements, please feel free to open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
```

Feel free to adjust the content or formatting to better suit your needs!
