<?php
/* Exercise 1: « Let’s join! » 3 points
In a separate file, write the SQL request to display an article (id = 10) and his author using a junction.
 Note: Only write the SQL request, not the PHP.*/
 
$query = 'SELECT * FROM articles a INNER JOIN users u ON u.id = a.id WHERE a.id= 10 ';

?>