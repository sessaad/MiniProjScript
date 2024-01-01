<!-- <?php
include('connection.php');

class Students {
    private $connection;

    public function __construct() {
        $this->connection = new Connection();
        $this->connection->selectDatabase('library');
    }

    public function createStudent($studentName, $rollId) {
        $sql = "INSERT INTO tblstudents (StudentName, RollId) VALUES ('$studentName', $rollId)";
        $this->connection->executeQuery($sql);
    }

    public function getStudents() {
        $sql = "SELECT * FROM tblstudents";
        return $this->connection->fetchData($sql);
    }

    // Ajoutez d'autres méthodes CRUD ici
}
?> -->
<?php
include('connection.php');

class Students {
    private $connection;

    public function __construct() {
        $this->connection = new Connection();
        $this->connection->selectDatabase('library');
    }

    public function createStudent($studentName, $rollId) {
        $sql = "INSERT INTO tblstudents (StudentName, RollId) VALUES ('$studentName', $rollId)";
        $this->connection->executeQuery($sql);
    }

    public function getStudents() {
        $sql = "SELECT * FROM tblstudents";
        return $this->connection->fetchData($sql);
    }

    public function updateStudent($studentID, $studentName, $rollId) {
        $sql = "UPDATE tblstudents SET StudentName='$studentName', RollId=$rollId WHERE StudentID=$studentID";
        $this->connection->executeQuery($sql);
    }

    public function deleteStudent($studentID) {
        $sql = "DELETE FROM tblstudents WHERE StudentID=$studentID";
        $this->connection->executeQuery($sql);
    }

    public function searchStudents($keyword) {
        $sql = "SELECT * FROM tblstudents WHERE StudentName LIKE '%$keyword%' OR RollId LIKE '%$keyword%'";
        return $this->connection->fetchData($sql);
    }
}
?>

