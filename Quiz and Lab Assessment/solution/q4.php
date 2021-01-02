
<?php

include 'connection.php';

$sql = 'SELECT employees.Last_Name, COUNT(*) ,employees.Job_Id FROM employees  GROUP BY employees.Job_Id';

$output = mysqli_query($mysqli_connection, $sql);
echo $output;
