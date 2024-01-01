<?php
include('connection.php');

$connection = new Connection();

$connection->createDatabase('library');

$queryStudents = "CREATE TABLE tblstudents (
    StudentID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    StudentName VARCHAR(50) NOT NULL,
    RollId INT(6) NOT NULL,
    RegDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )
    ";

$queryCategories = "CREATE TABLE tblcategories (
    CategoryID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    CategoryName VARCHAR(50) NOT NULL
    )
    ";

$queryAuthors = "CREATE TABLE tblauthors (
    AuthorID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    AuthorName VARCHAR(50) NOT NULL
    )
    ";

$queryBooks = "CREATE TABLE tblbooks (
    BookID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ISBNNumber VARCHAR(20) UNIQUE NOT NULL,
    BookTitle VARCHAR(100) NOT NULL,
    CategoryID INT(6) UNSIGNED,
    AuthorID INT(6) UNSIGNED,
    Price DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (BookID),
    FOREIGN KEY (CategoryID) REFERENCES tblcategories(CategoryID),
    FOREIGN KEY (AuthorID) REFERENCES tblauthors(AuthorID)
    )
    ";

$queryIssuedBookDetails = "CREATE TABLE tblissuedbookdetails (
    IssuedID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    StudentID INT(6) UNSIGNED,
    BookID INT(6) UNSIGNED,
    IssuedDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    ReturnDate TIMESTAMP,
    Fine DECIMAL(10,2) DEFAULT 0.00,
    FOREIGN KEY (StudentID) REFERENCES tblstudents(StudentID),
    FOREIGN KEY (BookID) REFERENCES tblbooks(BookID)
    )
    ";

$connection->selectDatabase('library');

$connection->createTable($queryStudents);
$connection->createTable($queryCategories);
$connection->createTable($queryAuthors);
$connection->createTable($queryBooks);
$connection->createTable($queryIssuedBookDetails);
?>
