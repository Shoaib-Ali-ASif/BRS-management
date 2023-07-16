<?php require_once('./database/connection.php'); ?>

<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('location: ./show-books.php');
}

$sql = "DELETE FROM `books` WHERE `books`.`id` = $id";
if ($conn->query($sql)) {
    header('location: ./show-books.php');
} else {
    echo "Failed to delete!";
}
