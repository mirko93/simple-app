<?php
include_once '../required.php';

use app\classes\Posts;

include('../public/includes/header.php');

$create = new Posts();

if (isset($_POST['submit'])) {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $author = $_POST['author'];
    $body = $_POST['body'];
    
    $create->createNewPost($author, $body);

    header("Location: /php-app/public");
}

?>

<div class="row">
    <h1>CREATE NEW POST</h1>
    <div class="backIndex">
        <a href="/php-app/public">Back to home</a>
    </div>

    <form action="/php-app/public/create.php" method="POST">
        <div class="mt-4">
            <input type="text" name="author" class="form-control" placeholder="Author Name" required>
        </div>

        <div class="mt-4">
            <textarea name="body" rows="10" class="form-control mt-3" placeholder="Post Text..." required></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-success mt-3">Post</button>
        </div>
    </form>
</div>

<?php

include('../public/includes/footer.php');

?>