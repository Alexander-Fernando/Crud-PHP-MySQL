<?php

session_start();


$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud',
    '3306'
);

/*if (isset($conn)){
    echo 'DB is connected';
}*/

?>