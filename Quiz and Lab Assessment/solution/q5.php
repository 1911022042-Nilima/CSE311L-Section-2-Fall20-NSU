<?php

include 'connection.php';

$sql = '

SELECT employees.Last_Name ,employees.Salary,employees.commission_pct FROM employees WHERE commission_pct IS NULL ORDER BY employees.Salary AND employees.commission_pct;
';

$output = mysqli_query($mysqli_connection, $sql);
echo $output;