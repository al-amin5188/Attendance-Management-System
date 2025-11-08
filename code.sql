-- Database: attendance_db
CREATE DATABASE IF NOT EXISTS attendance_db;
USE attendance_db;

-- Table: admin
CREATE TABLE admin (
  admin_id INT AUTO_INCREMENT PRIMARY KEY,
  admin_name VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255)
);

-- Table: auth_users
CREATE TABLE auth_users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin','teacher','student') NOT NULL,
  reset_token VARCHAR(255)
);

-- Table: batch
CREATE TABLE batch (
  batch_id INT AUTO_INCREMENT PRIMARY KEY,
  batch_name VARCHAR(100) NOT NULL,
  session VARCHAR(20)
);

-- Table: semester
CREATE TABLE semester (
  semester_id INT AUTO_INCREMENT PRIMARY KEY,
  semester_name VARCHAR(100) NOT NULL,
  batch_id INT,
  FOREIGN KEY (batch_id) REFERENCES batch(batch_id)
);

-- Table: teacher
CREATE TABLE teacher (
  teacher_id INT AUTO_INCREMENT PRIMARY KEY,
  teacher_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255) NOT NULL
);

-- Table: course
CREATE TABLE course (
  course_id INT AUTO_INCREMENT PRIMARY KEY,
  course_name VARCHAR(100) NOT NULL,
  course_code VARCHAR(50),
  teacher_id INT,
  semester_id INT,
  FOREIGN KEY (teacher_id) REFERENCES teacher(teacher_id),
  FOREIGN KEY (semester_id) REFERENCES semester(semester_id)
);

-- Table: student
CREATE TABLE student (
  student_id INT AUTO_INCREMENT PRIMARY KEY,
  student_name VARCHAR(100) NOT NULL,
  roll_no VARCHAR(50),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255),
  batch_id INT,
  FOREIGN KEY (batch_id) REFERENCES batch(batch_id)
);

-- Table: attendance
CREATE TABLE attendance (
  attendance_id INT AUTO_INCREMENT PRIMARY KEY,
  student_id INT,
  course_id INT,
  attendance_date DATE,
  status ENUM('Present','Absent') DEFAULT 'Absent',
  FOREIGN KEY (student_id) REFERENCES student(student_id),
  FOREIGN KEY (course_id) REFERENCES course(course_id)
);
