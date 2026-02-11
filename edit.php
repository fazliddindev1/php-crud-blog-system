<?php 
$title = "Edit";
require "includes/header.php";
?>
<div class="container">
    <header>
        <h1>Edit Blog</h1>
        <a class="btn" href="index.php">Back</a>
    </header>

    <div class="form-box">
        <form>
            <input type="text" value="My First Blog Post">
            <textarea rows="6">This is blog content...</textarea>

            <button>Update Post</button>
        </form>
    </div>

</div>
<?php require "includes/footer.php";?>
