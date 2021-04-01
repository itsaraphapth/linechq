<?php
$info = array(
    'host' => '203.154.66.189',
    'user' => 'root',
    'password' => 'wv8voc,o,kc]h;',
    'dbname' => 'mk_prd'
);
$conn = mysqli_connect($info['host'], $info['user'], $info['password'], $info['dbname']) or die('Error connection database!');
mysqli_set_charset($conn, 'utf8');
?>
