<?php require_once('./database/connection.php') ?>


<?php
$sql = "SELECT * FROM `books`";
$result = $conn->query($sql);
$books = $result->fetch_all(MYSQLI_ASSOC);
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
                            <h1 class="h1 mb-3">Books</h1>
                        </div>
                        <div class="col-6 text-end">
                            <a href="./add-book.php" class="btn btn-outline-primary">Add New Book</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <?php
                                        if (count($books) > 0) { ?>
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sr = 1;
                                                foreach ($books as $book) { ?>

                                                    <tr>
                                                        <td><?php echo $sr++; ?></td>
                                                        <td><?php echo $book['title']; ?></td>
                                                        <td><?php echo $book['author']; ?></td>

                                                        <td>
                                                            <a href="./view-more.php?id=<?php echo $book['id']; ?>" class="btn btn-secondary">Read-More</a>
                                                            <a href="./edit-book.php?id=<?php echo $book['id']; ?>" class="btn btn-primary">Edit</a>
                                                            <a href="./delete-book.php?id=<?php echo $book['id']; ?>" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>

                                            </tbody>
                                        <?php
                                        } else { ?>
                                            <div class="alert alert-danger m-0">No record found!</div>
                                        <?php
                                        }
                                        ?>
                                    </table>
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