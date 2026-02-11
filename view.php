<?php 
$title = "View";
require "includes/header.php";
?>

<div class="container">
    <header>
        <h1>Blog Post</h1>
        <a href="index.php">← Back</a>
    </header>

    <div class="post">
        <h2>My First Blog Post</h2>
        <small>Created: 2026-02-11 14:20</small>

        <p>
            This is the full blog content. Later PHP will load this dynamically
            from database.
        </p>
    </div>

</div>
<?php require "includes/footer.php";?>
