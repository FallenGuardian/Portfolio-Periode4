<?php
$Database['hostname'] = 'localhost';
$Database['username'] = 'root';
$Database['password'] = '';
$Database['database'] = 'portfolio';

$mysqli = new mysqli($Database['hostname'], $Database['username'], $Database['password'], $Database['database']);


if ($mysqli->connect_errno) {
    echo 'Failed to connect to the database';
    exit();
}