<?php

include_once '../required.php';

use app\classes\Posts;

include('../public/includes/header.php');

// class Post
$posts = new Posts();

$id = $_GET['id'];
$delete = $posts->deletePost($id);

header("location: /php-app/public");