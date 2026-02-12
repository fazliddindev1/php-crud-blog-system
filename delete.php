<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_id'])) {

    $post_id = (int) $_POST['post_id'];

    $statement = $pdo->prepare("DELETE FROM posts WHERE id = ?");
    $statement->execute([$post_id]);

    header("Location: view.php");
    exit;
}
