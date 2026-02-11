<?php 
$title = "Create";
require "includes/header.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
    var_dump($_POST);
}


?>
<div class="container">
    <header>
        <h1>Create New Blog</h1>
        <a href="index.php">← Back</a>
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
