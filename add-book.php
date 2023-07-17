<?php require_once('./database/connection.php') ?>
<?php

$error = $title = $description = $author = "";


if (isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $author = htmlspecialchars($_POST['author']);
    

    if (empty($title)) {
        $error = "Enter Book title!";
    } elseif (empty($author)) {
        $error = "Enter author name!";
    } elseif (empty($description)) {
        $error = "Enter book description!";
    } else { {
            $sql = "INSERT INTO `books`(`title`, `description`, `author`, `img`) VALUES ('$title','$description','$author','$img')";
            $is_created = $conn->query($sql);
            if ($is_created) {
                $success = 'SuccessFully Added!';
            } else {
                $error = 'failed!';
            }
        }
    }
}
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
                            <h1 class="h1 mb-3">Add New Book</h1>
                        </div>
                        <div class="col-6 text-end">
                            <a href="./show-books.php" class="btn btn-outline-primary">Back</a>
                        </div>
                    </div>
                    <?php require_once('./includes/alerts.php'); ?>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" class="mx-5">

                        <div class="mb-3">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Book Title:" value="<?php echo $title; ?>">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" name="author" id="author" placeholder="Author Name:" value="<?php echo $author; ?>">
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Book Description"><?php echo $description; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <input type="file" name="image" id="image" placeholder="Book image">
                        </div>

                        <div>
                            <input type="submit" name="submit" value="Add Book" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </main>
            <?php require_once('./includes/footer.php'); ?>

        </div>
    </div>

    <script src="assets/js/app.js"></script>
</body>

</html>