Student Management System - Laravel CRUD
This project is a Student Management System built with Laravel. It allows you to manage students and courses, including CRUD (Create, Read, Update, Delete) operations for both students and courses. Additionally, you can assign multiple students to a course and remove students from courses.

Features
Student Management:

Add, update, delete students.
View student details.
Course Management:

Add, update, delete courses.
Assign multiple students to a course.
Remove students from courses.
Routes
Here are the routes used in the project:

Course Routes
GET|HEAD /courses
Displays a list of all courses.
Controller: CourseController@index

POST /courses
Creates a new course.
Controller: CourseController@store

GET|HEAD /courses/create
Displays the form to create a new course.
Controller: CourseController@create

GET|HEAD /courses/{course}
Displays details of a specific course.
Controller: CourseController@show

PUT|PATCH /courses/{course}
Updates the details of a specific course.
Controller: CourseController@update

DELETE /courses/{course}
Deletes a specific course.
Controller: CourseController@destroy

GET|HEAD /courses/{course}/assign-students
Displays the form to assign students to a course.
Controller: CourseController@assignStudentsForm

POST /courses/{course}/assign-students
Assigns students to a course.
Controller: CourseController@assignStudents

GET|HEAD /courses/{course}/edit
Displays the form to edit a course.
Controller: CourseController@edit

DELETE /courses/{course}/students/{student}
Removes a student from a course.
Controller: CourseController@removeStudent

Student Routes
GET|HEAD /students
Displays a list of all students.
Controller: StudentController@index

POST /students
Creates a new student.
Controller: StudentController@store

GET|HEAD /students/create
Displays the form to create a new student.
Controller: StudentController@create

GET|HEAD /students/{student}
Displays details of a specific student.
Controller: StudentController@show

PUT|PATCH /students/{student}
Updates the details of a specific student.
Controller: StudentController@update

DELETE /students/{student}
Deletes a specific student.
Controller: StudentController@destroy

GET|HEAD /students/{student}/edit
Displays the form to edit a student.
Controller: StudentController@edit

Project Setup
Follow these steps to set up the project on your local machine.

1. Clone the repository
bash
Copy
Edit
git clone https://github.com/your-username/student-management.git
cd student-management
2. Install Dependencies
Install the PHP dependencies:

bash
Copy
Edit
composer install
Install the JavaScript dependencies:

bash
Copy
Edit
npm install
3. Set Up the Environment
Copy the .env.example file to .env:
bash
Copy
Edit
cp .env.example .env
Generate the application key:
bash
Copy
Edit
php artisan key:generate
4. Set Up the Database
Create a new database in your preferred database management system (e.g., MySQL, PostgreSQL).

Update the .env file with your database credentials:

env
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
5. Run Migrations and Seeders
Run the migrations to create the necessary tables in the database:

bash
Copy
Edit
php artisan migrate
(Optional) Run the database seeder to populate your tables with sample data:

bash
Copy
Edit
php artisan db:seed
6. Run the Development Server
To run the Laravel development server, execute the following command:

bash
Copy
Edit
php artisan serve
The application should now be accessible at http://localhost:8000.

7. Compile Frontend Assets
To compile the frontend assets (e.g., styles, JavaScript), run:

bash
Copy
Edit
npm run dev
This will compile your assets and serve them for development.

Usage
Student Management:

You can add, edit, or delete students.
Each student has a unique ID and can be assigned to multiple courses.
Course Management:

You can add, edit, or delete courses.
You can assign multiple students to a course using the "Assign Students" feature.
You can remove a student from a course if needed.