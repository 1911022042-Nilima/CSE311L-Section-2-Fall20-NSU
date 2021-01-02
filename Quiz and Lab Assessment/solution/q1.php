<?php

include 'connection.php';

$sql = 'SELECT last_name, MAX(salary), MIN(salary), SUM(salary),AVG(salary) 
from employees GROUP BY employee.Job_Id';

$output = mysqli_query($mysqli_connection, $sql);
echo $output;
