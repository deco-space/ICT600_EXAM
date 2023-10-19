CREATE DATABASE students_ron;

CREATE TABLE students (
	id INT PRIMARY KEY AUTO_INCREMENT,
	studentNumber VARCHAR(13),
	fullName VARCHAR(250),
	midtermGrade DECIMAL(5, 2),
	finalGrade DECIMAL(5, 2),
	date_created DATE,
	is_deleted INT(1) DEFAULT 0
);