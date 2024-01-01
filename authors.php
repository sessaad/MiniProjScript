<!-- <?php
include('connection.php');

class Authors {
    private $connection;

    public function __construct() {
        $this->connection = new Connection();
        $this->connection->selectDatabase('library');
    }

    public function createAuthor($authorName) {
        $sql = "INSERT INTO tblauthors (AuthorName) VALUES ('$authorName')";
        $this->connection->executeQuery($sql);
    }

    public function getAuthors() {
        $sql = "SELECT * FROM tblauthors";
        return $this->connection->fetchData($sql);
    }

    // Ajoutez d'autres méthodes CRUD ici
}
?> -->

<?php
include('connection.php');

class Authors {
    private $connection;

    public function __construct() {
        $this->connection = new Connection();
        $this->connection->selectDatabase('library');
    }

    public function createAuthor($authorName) {
        $sql = "INSERT INTO tblauthors (AuthorName) VALUES ('$authorName')";
        $this->connection->executeQuery($sql);
    }

    public function getAuthors() {
        $sql = "SELECT * FROM tblauthors";
        return $this->connection->fetchData($sql);
    }

    public function updateAuthor($authorID, $authorName) {
        $sql = "UPDATE tblauthors SET AuthorName='$authorName' WHERE AuthorID=$authorID";
        $this->connection->executeQuery($sql);
    }

    public function deleteAuthor($authorID) {
        $sql = "DELETE FROM tblauthors WHERE AuthorID=$authorID";
        $this->connection->executeQuery($sql);
    }

    public function searchAuthors($keyword) {
        $sql = "SELECT * FROM tblauthors WHERE AuthorName LIKE '%$keyword%'";
        return $this->connection->fetchData($sql);
    }
}
?>

