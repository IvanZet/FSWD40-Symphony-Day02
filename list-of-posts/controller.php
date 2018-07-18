<?php

// Requiring the model
require_once('model.php');

// Retrieving the list of posts
$title = 'List of Posts';
$posts = getAllPosts();

// Requiring the view
require_once('view.php');