<?php
require_once('mySQL-functions.php');

/*
*DB language independent code to auery a DB
*/

function getAllPosts()
{
// Connecting to database
$link= open_connection('localhost', 'root', '');
// Performing SQL query
$result = query_database('SELECT post_date, post_title FROM post', 'dbtest', $link);
// Filling up the array
$posts = array();
while ($row = fetch_results($result))
{
   $posts[] = $row;
}

// Closing connection
close_connection($link);
return $posts;
}