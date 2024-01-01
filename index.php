<?php include ('./partials/header.php') ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ml-3" href="">Book Borrower System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/book-borrower-system/">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/book-borrower-system/book-list.php">List of Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/book-borrower-system/book-borrowed.php">Borrowed</a>
            </li>
            </ul>
        </div>
    </nav>

    <div class="main">
        <div class="title">
            <h1>Book Borrower System</h1>
            <p>A system for managing lists and borrowed books.</p>
        </div>
    </div>



<?php include ('./partials/footer.php') ?>