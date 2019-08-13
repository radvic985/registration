<?php
require_once('configDB.php'); // подключает файл конфигурации для подключения к БД

class ConnectDB
{
    /**
     * Возвращает PDO объект для работы с БД
     * @return PDO
     */
    public static function connect()
    {
        try {
            return new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME . ";port=" . PORT, USER, PASS);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}