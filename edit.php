 <?php
$title = "Edit Post";
require "includes/header.php";
require "database.php";

// 1. Check if ID exists
if (!isset($_GET['id'])) {
    header("Location: view.php");
    exit;
}

$id = (int) $_GET['id'];

// 2. Fetch existing post
$statement = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$statement->execute([$id]);
$post = $statement->fetch();

if (!$post) {
    header("Location: view.php");
    exit;
}

// 3. Update logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title_post = trim($_POST['title']);
    $body = trim($_POST['body']);

    if (!empty($title_post) && !empty($body)) {

        $statement = $pdo->prepare("UPDATE posts SET title = ?, body = ? WHERE id = ?");
        $statement->execute([$title_post, $body, $id]);

        header("Location: view.php");
        exit;
    } else {
        $error = "All fields are required!";
    }
}
?>

<div class="container">
    <header>
        <h1>Edit Blog</h1>
        <a href="view.php" class="btn">← Back</a>
    </header>

    <div class="form-box">

        <?php if (!empty($error)): ?>
            <p style="color:red"><?= $error ?></p>
        <?php endif; ?>

        <form method="POST">
            <input 
                type="text" 
                name="title" 
                value="<?= htmlspecialchars($post['title']) ?>" 
                placeholder="Blog Title"
            >

            <textarea 
                name="body" 
                rows="6" 
                placeholder="Blog Content"
            ><?= htmlspecialchars($post['body']) ?></textarea>

            <button>Update Post</button>
        </form>
    </div>
</div>

<?php require "includes/footer.php"; ?>
