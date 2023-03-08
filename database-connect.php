<?php
    $dsn = 'mysql:host=localhost;dbname=D00182438';
    $username = 'D00182438';
    $password = '61P8yzQf';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database-error.php');
        exit();
    }
?>