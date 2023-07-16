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
                            <h1 class="h1 mb-3">book details</h1>
                        </div>
                        <div class="col-6 text-end">
                            <a href="./show-books.php" class="btn btn-outline-primary">Back</a>
                        </div>
                    </div>
                    <?php require_once('./includes/alerts.php'); ?>


                </div>
            </main>
            <?php require_once('./includes/footer.php'); ?>

        </div>
    </div>

    <script src="assets/js/app.js"></script>
</body>

</html>