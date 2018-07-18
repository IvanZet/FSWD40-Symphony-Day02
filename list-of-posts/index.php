<?php

// Connecting, selecting database
$link= mysqli_connect('localhost', 'root', '', 'dbtest');
// Performing SQL query
$sql="SELECT * FROM post";
$result = mysqli_query($link, $sql);
?>

<html>
 <head>
   <title>List of Posts</title>
 </head>
 <body>
  <h1>List of Posts</h1>
  <table>
    <tr><th>Date</th><th>Title</th></tr>
<?php
// Printing results in HTML
while ($row = mysqli_fetch_array($result))
{
echo "\t<tr>\n";
printf("\t\t<td> %s </td>\n", $row['post_date']);
printf("\t\t<td> %s </td>\n", $row['post_title']);
echo "\t</tr>\n";
}
?>
   </table>
 </body>
</html>

<?php
// Closing connection
mysqli_close($link);
?>