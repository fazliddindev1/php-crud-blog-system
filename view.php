<?php 
$title = "View";
require "includes/header.php";

require "database.php";


$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll()

?>

<div class="container">
    <header>
        <h1>Blog Post</h1>
        <a class="btn" href="index.php">Back</a>
    </header>

<?php foreach ($posts as $post) :?>
    <div class="post">
        <h2><?= $post["title"]?></h2>
        <br>
        <p>
            <?=$post["body"]?> 
        </p>
        <br>
        <small><?= $post["created_at"]?></small>
        <br>
        <a href="edit.php" class="btn edit">Edit</a>
        <a href="#" class="btn delete">Delete</a>
    </div>
<?php endforeach;?>

</div>
<?php require "includes/footer.php";?>
