# Student Management System - Laravel CRUD

This project is a **Student Management System** built with **Laravel**. It allows you to manage students and courses, including CRUD (Create, Read, Update, Delete) operations for both students and courses. Additionally, you can assign multiple students to a course and remove students from courses.

## Features

### Student Management:
- Add, update, delete students.
- View student details.

### Course Management:
- Add, update, delete courses.
- Assign multiple students to a course.
- Remove students from courses.

## Routes

### Course Routes

- **`GET|HEAD /courses`**  
  Displays a list of all courses.  
  **Controller**: `CourseController@index`

- **`POST /courses`**  
  Creates a new course.  
  **Controller**: `CourseController@store`

- **`GET|HEAD /courses/create`**  
  Displays the form to create a new course.  
  **Controller**: `CourseController@create`

- **`GET|HEAD /courses/{course}`**  
  Displays details of a specific course.  
  **Controller**: `CourseController@show`

- **`PUT|PATCH /courses/{course}`**  
  Updates the details of a specific course.  
  **Controller**: `CourseController@update`

- **`DELETE /courses/{course}`**  
  Deletes a specific course.  
  **Controller**: `CourseController@destroy`

- **`GET|HEAD /courses/{course}/assign-students`**  
  Displays the form to assign students to a course.  
  **Controller**: `CourseController@assignStudentsForm`

- **`POST /courses/{course}/assign-students`**  
  Assigns students to a course.  
  **Controller**: `CourseController@assignStudents`

- **`GET|HEAD /courses/{course}/edit`**  
  Displays the form to edit a course.  
  **Controller**: `CourseController@edit`

- **`DELETE /courses/{course}/students/{student}`**  
  Removes a student from a course.  
  **Controller**: `CourseController@removeStudent`

### Student Routes

- **`GET|HEAD /students`**  
  Displays a list of all students.  
  **Controller**: `StudentController@index`

- **`POST /students`**  
  Creates a new student.  
  **Controller**: `StudentController@store`

- **`GET|HEAD /students/create`**  
  Displays the form to create a new student.  
  **Controller**: `StudentController@create`

- **`GET|HEAD /students/{student}`**  
  Displays details of a specific student.  
  **Controller**: `StudentController@show`

- **`PUT|PATCH /students/{student}`**  
  Updates the details of a specific student.  
  **Controller**: `StudentController@update`

- **`DELETE /students/{student}`**  
  Deletes a specific student.  
  **Controller**: `StudentController@destroy`

- **`GET|HEAD /students/{student}/edit`**  
  Displays the form to edit a student.  
  **Controller**: `StudentController@edit`

## Project Setup

Follow these steps to set up the project on your local machine.

### 1. Clone the repository
```bash
git clone https://github.com/Baraka46/laravel-CRUD.git
cd student-management
