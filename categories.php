<!-- <?php
include('connection.php');

class Categories {
    private $connection;

    public function __construct() {
        $this->connection = new Connection();
        $this->connection->selectDatabase('library');
    }

    public function createCategory($categoryName) {
        $sql = "INSERT INTO tblcategories (CategoryName) VALUES ('$categoryName')";
        $this->connection->executeQuery($sql);
    }

    public function getCategories() {
        $sql = "SELECT * FROM tblcategories";
        return $this->connection->fetchData($sql);
    }

    // Ajoutez d'autres méthodes CRUD ici
}
?> -->

<?php
include('connection.php');

class Categories {
    private $connection;

    public function __construct() {
        $this->connection = new Connection();
        $this->connection->selectDatabase('library');
    }

    public function createCategory($categoryName) {
        $sql = "INSERT INTO tblcategories (CategoryName) VALUES ('$categoryName')";
        $this->connection->executeQuery($sql);
    }

    public function getCategories() {
        $sql = "SELECT * FROM tblcategories";
        return $this->connection->fetchData($sql);
    }

    public function updateCategory($categoryID, $categoryName) {
        $sql = "UPDATE tblcategories SET CategoryName='$categoryName' WHERE CategoryID=$categoryID";
        $this->connection->executeQuery($sql);
    }

    public function deleteCategory($categoryID) {
        $sql = "DELETE FROM tblcategories WHERE CategoryID=$categoryID";
        $this->connection->executeQuery($sql);
    }

    public function searchCategories($keyword) {
        $sql = "SELECT * FROM tblcategories WHERE CategoryName LIKE '%$keyword%'";
        return $this->connection->fetchData($sql);
    }
}
?>

