<?php
/*
* Functions to work with mySQL
*/

function open_connection($host, $user, $password)
{
	return mysqli_connect($host, $user, $password);
}

function close_connection($link)
{
	mysqli_close($link);
}

function query_database($query, $database, $link)
{
	mysqli_select_db($link, $database);
	return mysqli_query($link, $query);
}

function fetch_results($result)
{
	return mysqli_fetch_array($result);
}
