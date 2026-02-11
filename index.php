<?php 
$title = "Main";
require "includes/header.php";
?>
<div class="container">
    <header>
        <h1>My Mini Blog</h1>
        <a href="create.php">+ Create New Post</a>
    </header>

    <div class="post">
        <h2>My First Blog Post</h2>

        <a href="view.php" class="btn">Read</a>
        <a href="edit.php" class="btn edit">Edit</a>
        <a href="#" class="btn delete">Delete</a>
    </div>

</div>
<?php require "includes/footer.php";?>
