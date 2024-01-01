<!-- <?php
include('connection.php');

class Books {
    private $connection;

    public function __construct() {
        $this->connection = new Connection();
        $this->connection->selectDatabase('library');
    }

    public function createBook($isbnNumber, $bookTitle, $categoryID, $authorID, $price) {
        $sql = "INSERT INTO tblbooks (ISBNNumber, BookTitle, CategoryID, AuthorID, Price) VALUES ('$isbnNumber', '$bookTitle', $categoryID, $authorID, $price)";
        $this->connection->executeQuery($sql);
    }

    public function getBooks() {
        $sql = "SELECT * FROM tblbooks";
        return $this->connection->fetchData($sql);
    }

    // Ajoutez d'autres méthodes CRUD ici
}
?> -->

<?php
include('connection.php');

class Books {
    private $connection;

    public function __construct() {
        $this->connection = new Connection();
        $this->connection->selectDatabase('library');
    }

    public function createBook($isbnNumber, $bookTitle, $categoryID, $authorID, $price) {
        $sql = "INSERT INTO tblbooks (ISBNNumber, BookTitle, CategoryID, AuthorID, Price) VALUES ('$isbnNumber', '$bookTitle', $categoryID, $authorID, $price)";
        $this->connection->executeQuery($sql);
    }

    public function getBooks() {
        $sql = "SELECT * FROM tblbooks";
        return $this->connection->fetchData($sql);
    }

    public function updateBook($bookID, $isbnNumber, $bookTitle, $categoryID, $authorID, $price) {
        $sql = "UPDATE tblbooks SET ISBNNumber='$isbnNumber', BookTitle='$bookTitle', CategoryID=$categoryID, AuthorID=$authorID, Price=$price WHERE BookID=$bookID";
        $this->connection->executeQuery($sql);
    }

    public function deleteBook($bookID) {
        $sql = "DELETE FROM tblbooks WHERE BookID=$bookID";
        $this->connection->executeQuery($sql);
    }

    public function searchBooks($keyword) {
        $sql = "SELECT * FROM tblbooks WHERE ISBNNumber LIKE '%$keyword%' OR BookTitle LIKE '%$keyword%' OR Price LIKE '%$keyword%'";
        return $this->connection->fetchData($sql);
    }
}
?>
