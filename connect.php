<?php
$info = array(
    'host' => '203.154.66.194',
    'user' => 'root',
    'password' => 'Icon@2021',
    'dbname' => 'mk_prd'
);
$conn = mysqli_connect($info['host'], $info['user'], $info['password'], $info['dbname']) or die('Error connection database!');
mysqli_set_charset($conn, 'utf8');
?>