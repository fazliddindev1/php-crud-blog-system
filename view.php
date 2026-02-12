<?php 
$title = "View";
require "includes/header.php";
require "database.php";

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll();
?>

<div class="container">
    <header>
        <h1>Blog Posts</h1>
        <a class="btn" href="index.php">Back</a>
    </header>

<?php foreach ($posts as $post): ?>
    <div class="post">
        <h2><?= ($post["title"]) ?></h2>
        <p><?= ($post["body"]) ?></p>

        <small><?= $post["created_at"] ?></small>
        <br><br>

        <a href="edit.php?id=<?= $post['id'] ?>" class="btn edit">Edit</a>

        <form method="POST" action="delete.php" style="display:inline;">
            <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
            <button type="submit" class="btn delete">Delete</button>
        </form>
    </div>
<?php endforeach; ?>

</div>

<?php require "includes/footer.php"; ?>
