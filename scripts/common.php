<?php

// Объявляем нужные константы
define('DB_HOST', 'mysql');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'webdevkin');
 
// Подключаемся к базе данных
function connectDB() {
    $errorMessage = 'Невозможно подключиться к серверу базы данных';
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$conn)
        throw new Exception($errorMessage);
    else {
        $query = $conn->query('set names utf8');
        if (!$query)
            throw new Exception($errorMessage);
        else
            return $conn;
    }
}
