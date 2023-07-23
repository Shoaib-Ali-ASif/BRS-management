<?php require_once('./database/connection.php') ?>


<?php
$sql = "SELECT `title`, `description`, `author` FROM `books`";
$result = $conn->query($sql);
$book = $result->fetch_all(MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<?php require_once('./includes/head.php'); ?>

<body>
    <div class="wrapper">

        <?php require_once('./includes/sidenavbar.php'); ?>

        <div class="main">

            <?php require_once('./includes/topnavbar.php'); ?>

            <main class="content mx-5">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-6">
                            <h1 class="h1 mb-3">Book Details</h1>
                        </div>
                        <div class="col-6 text-end">
                            <a href="./show-books.php" class="btn btn-outline-primary">back</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $id; ?>" method="post">
                                        <h1>Title:</h1>
                                        <br>
                                        <h5><?php echo $book['title']; ?></h5>
                                        <br>
                                        <h1>Author:</h1>
                                        <br>
                                        <h5><?php echo $book['author']; ?></h5>
                                        <br>
                                        <h1>Description:</h1>
                                        <br>
                                        <h5><?php echo $book['description']; ?></h5>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php require_once('./includes/footer.php'); ?>

        </div>
    </div>

    <script src="assets/js/app.js"></script>
</body>

</html>