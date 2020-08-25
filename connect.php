<?php
$info = array(
    'host' => '203.154.66.172',
    'user' => 'root',
    'password' => 'Icon@2020',
    'dbname' => 'cm_test'
);
$conn = mysqli_connect($info['host'], $info['user'], $info['password'], $info['dbname']) or die('Error connection database!');
mysqli_set_charset($conn, 'utf8');
?>