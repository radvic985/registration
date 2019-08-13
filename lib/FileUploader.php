<?php
require_once('lib/Validator.php'); // класс валидации данных пользователя

class FileUploader
{
    const TYPES = ['image/jpeg', 'image/png', 'image/gif']; // возможные расширения файлов

    /**
     * Загружает файл на сервер, если он проходит валидацию
     * @param $file
     * @return string|null
     */
    public static function uploadFile($file)
    {
        if ($file['file']['error'] == 0 && Validator::validateFileExtension($file['file']['type'], self::TYPES)) {
            move_uploaded_file($file['file']['tmp_name'], 'upload/' . $file['file']['name']);
            return 'upload/' . $file['file']['name']; // возвращает путь к файлу
        }
        return null;
    }
}