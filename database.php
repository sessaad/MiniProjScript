<?php


include('connection.php');


$connection = new Connection();


$connection->createDatabase('book_borrower_db');
$query0 = "CREATE TABLE CITIES (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(30) NOT NULL
    )
    ";
$query = "CREATE TABLE Clients (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    firstname VARCHAR(30) NOT NULL,
    email VARCHAR(50) UNIQUE,
    password VARCHAR(80),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIME,
    idCity INT(6) UNSIGNED NOT NULL,
    FOREIGN KEY (idCity) REFERENCES Cities(id)
    )
    ";
$query1 = "CREATE TABLE tbl_book_list (
    -- id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    -- firstname VARCHAR(30) NOT NULL,
    -- firstname VARCHAR(30) NOT NULL,
    -- email VARCHAR(50) UNIQUE,
    -- password VARCHAR(80),
    -- reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIME
    )
    ";
$query2 = "CREATE TABLE tbl_authors_list (
    -- id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    -- firstname VARCHAR(30) NOT NULL,
    -- firstname VARCHAR(30) NOT NULL,
    -- email VARCHAR(50) UNIQUE,
    -- password VARCHAR(80),
    -- reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIME
    )
    ";
$query3 = "CREATE TABLE tbl_borrowed_book (
    -- id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    -- firstname VARCHAR(30) NOT NULL,
    -- firstname VARCHAR(30) NOT NULL,
    -- email VARCHAR(50) UNIQUE,
    -- password VARCHAR(80),
    -- reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIME
    )
    ";

$connection->selectDatabase('crudPoo6');

$connection->createTable($query0);
$connection->createTable($query);
$connection->createTable($query1);
$connection->createTable($query2);
$connection->createTable($query3);


?>