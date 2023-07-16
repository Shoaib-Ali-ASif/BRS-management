<?php require_once('./database/connection.php'); ?>

<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "SELECT * FROM `books` WHERE `books`.`id` = $id";
$result = $conn->query($sql);
$book = $result->fetch_assoc();

$title = $book['title'];
$author = $book['author'];
$description = $book['description'];

if (isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $description = htmlspecialchars($_POST['description']);

    if (empty($title)) {
        $error = "Enter Book title!";
    } elseif (empty($author)) {
        $error = "Enter author name!";
    } 
    elseif (empty($description)) {
        $error = "Enter description!";
    } else {
        $sql = "UPDATE `books` SET `title` = '$title', `author` = '$author', `description` = `$description` WHERE `id` = $id";
        if ($conn->query($sql)) {
            $success = "SuccessFully updated!";
        } else {
            $error = "Failed to edit!";
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
                            <h1 class="h1 mb-3">Book Details</h1>
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
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Book Description" value="<?php echo $description; ?>" ></textarea>
                        </div>

                        <div class="mb-3">
                            <input type="file" name="img" id="img" placeholder="Book image">
                        </div>

                        <div>
                            <input type="submit" name="submit" value="Save" class="btn btn-primary">
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