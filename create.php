<?php
$title = "Create";
require "includes/header.php";
require "database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title_post = trim($_POST['title']);
    $body = trim($_POST['body']);

    if (!empty($title_post) && !empty($body)) {

        $statement = $pdo->prepare("INSERT INTO posts (title, body, created_at) VALUES (:title, :body, NOW())");
        $statement->execute([
            'title' => $title_post,
            'body'  => $body
        ]);

        header("Location: view.php");
        exit;
    } else {
        $error = "All fields are required!";
    }
}
?>
<div class="container">
    <header>
        <h1>Create New Blog</h1>
        <a class="btn" href="index.php">Back</a>
    </header>

    <div class="form-box">
        <form method="POST" action="">
            <input name="title" type="text" placeholder="Blog Title">
            <textarea name="body" rows="6" placeholder="Blog Content"></textarea>

            <button>Create Post</button>
        </form>
    </div>

</div>
<?php require "includes/footer.php";?>
