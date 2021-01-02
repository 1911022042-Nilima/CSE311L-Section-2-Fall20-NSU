<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect('localhost', 'root', '', 'login_form');

// Check connection
if ($link === false) {
    die('ERROR: Could not connect. '.mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO users (id, username, password) VALUES ('3','ghj','ghj'),('2','A','AB')";
if (mysqli_query($link, $sql)) {
    echo 'Records inserted successfully.';
} else {
    echo "ERROR: Could not able to execute $sql. ".mysqli_error($link);
}

// Close connection
mysqli_close($link);
