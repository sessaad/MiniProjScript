<!-- <?php
include('connection.php');

class IssuedBook {
    private $connection;

    public function __construct() {
        $this->connection = new Connection();
        $this->connection->selectDatabase('library');
    }

    public function issueBook($studentID, $bookID) {
        $sql = "INSERT INTO tblissuedbookdetails (StudentID, BookID) VALUES ($studentID, $bookID)";
        $this->connection->executeQuery($sql);
    }

    public function getIssuedBooks() {
        $sql = "SELECT * FROM tblissuedbookdetails";
        return $this->connection->fetchData($sql);
    }

    // Ajoutez d'autres méthodes CRUD ici
}
?> -->

<?php
include('connection.php');

class IssuedBook {
    private $connection;

    public function __construct() {
        $this->connection = new Connection();
        $this->connection->selectDatabase('library');
    }

    public function issueBook($studentID, $bookID) {
        $sql = "INSERT INTO tblissuedbookdetails (StudentID, BookID) VALUES ($studentID, $bookID)";
        $this->connection->executeQuery($sql);
    }

    public function getIssuedBooks() {
        $sql = "SELECT * FROM tblissuedbookdetails";
        return $this->connection->fetchData($sql);
    }

    public function updateIssuedBook($issuedID, $studentID, $bookID, $returnDate, $fine) {
        $sql = "UPDATE tblissuedbookdetails SET StudentID=$studentID, BookID=$bookID, ReturnDate='$returnDate', Fine=$fine WHERE IssuedID=$issuedID";
        $this->connection->executeQuery($sql);
    }

    public function deleteIssuedBook($issuedID) {
        $sql = "DELETE FROM tblissuedbookdetails WHERE IssuedID=$issuedID";
        $this->connection->executeQuery($sql);
    }

    public function searchIssuedBooks($keyword) {
        $sql = "SELECT * FROM tblissuedbookdetails WHERE ReturnDate LIKE '%$keyword%' OR Fine LIKE '%$keyword%'";
        return $this->connection->fetchData($sql);
    }
}
?>

