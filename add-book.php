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
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" class="mx-5">

                        <div class="mb-3">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Book Title:" value="">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Author Name:" value="">
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Book Description"></textarea>
                        </div>

                        <div class="mb-3">
                            <input type="file" name="file" id="file" placeholder="Book image">
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