<?php
require_once('lib/ConnectDB.php');

class T // плохое название, но использую только ради краткости кода(и то как пример), так как будет вызываться во многих местах
{
    /**
     * Метод-переводчик с английского(дефолтного) языка на другой язык(в параметре)
     * @param $str - строка для перевода
     * @param $lang - язык перевода
     * @return string
     */
    public static function lang($str, $lang)
    {
        if ($lang == 'en') { // если язык англяийский - возвращает простую строку на английском
            return $str;
        }
        $sql = "SELECT " . $lang . " FROM " . $lang . " WHERE `en` = :str"; // получает перевод строки для выбранного языка
        $pdo = ConnectDB::connect();
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['str' => $str]); // выполняет запрос с именованныи параметром
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result[0][$lang]; // возвращает значение из БД
    }
}