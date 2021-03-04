<?php

use app\classes\db\Database;
use app\classes\Posts;

include_once '../required.php';

// call database
$database = new Database();

// class Post
$posts = new Posts();

?>

<?php include('../public/includes/header.php') ?>

<div class="row">
    <h1><?php echo SITENAME; ?></h1>

    <div>
        <a href="/php-app/public/create.php">Create new post</a>
    </div>

    <br>

    <div class="content-posts">
        <?php foreach ($posts->findAllPosts() as $post) : ?>
            <div>
                <h4><i><?php echo $post->author ?></i></h4>
            </div>

            <div class="mt-2 mb-2">
                <small>
                    <b><?php echo 'Created on: ' . date('F j H:m', strtotime($post->created_at)) ?></b>
                </small>
            </div>

            <div>
                <p><?php echo $post->body ?></p>
            </div>

            <a onclick="return confirm('Are you sure delete post?');" href="/php-app/public/delete.php?id=<?php echo $post->id ?>" class="btn btn-danger">Delete</a>


            <br>
            <hr> <br>
        <?php endforeach; ?>
    </div>
</div>

<nav aria-label="...">
    <ul class="pagination">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>

<?php include('../public/includes/footer.php') ?>