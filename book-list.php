<?php 
include ('./conn/conn.php');
include ('./partials/header.php'); 
include ('./partials/modal.php');
?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ml-3" href="">Book Borrower System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/book-borrower-system/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="http://localhost/book-borrower-system/book-list.php">List of Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/book-borrower-system/book-borrowed.php">Borrowed</a>
            </li>
            </ul>
        </div>
    </nav>

    <div class="main">
        <div class="book-list-container">
            <div class="container-header row mb-3">
                <div class="col">
                    <h3>List of Books</h3>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-secondary" id="addBook" data-toggle="modal" data-target="#addBookModal">Add Book</button>
                </div>
            </div>
            <table class="table table-sm" id="borrowedTable">
                <thead>
                    <tr>
                    <th scope="col">Book ID</th>
                    <th scope="col">Book Title</th>
                    <th scope="col">Book Author</th>
                    <th scope="col">Date Added</th>
                    <th scope="col" style="width: 60px;">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $stmt = $conn->prepare("SELECT * FROM tbl_book_list");
                        $stmt->execute();

                        $result = $stmt->fetchAll();

                        foreach ($result as $row) {
                            $bookID = $row['tbl_book_list_id']; 
                            $bookTitle = $row['book_title']; 
                            $bookAuthor = $row['book_author'];
                            $dateAdded = $row['date_added']; 
                            ?>

                            <tr>
                                <th id="bookID-<?= $bookID ?>"><?= $bookID ?></th>
                                <td id="bookTitle-<?= $bookID ?>"><?= $bookTitle ?></td>
                                <td id="bookAuthor-<?= $bookID ?>"><?= $bookAuthor ?></td>
                                <td id="dateAdded-<?= $bookID ?>"><?= $dateAdded ?></td>
                                <td>
                                    <button class="btn btn-secondary" type="button" onclick="updateBook(<?= $bookID ?>)"><i class="fa-solid fa-pencil"></i></button>
                                    <button class="btn btn-danger" type="button" onclick="deleteBook(<?= $bookID ?>)"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>

                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php include ('./partials/footer.php'); ?>