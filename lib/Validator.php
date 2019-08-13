<?php

class Validator
{
    /**
     * Валидирует данные пользователя
     * @param $param
     * @return bool
     */
    public static function validate($param)
    {
        // удаляет лишние параметры - они не нужны больше при передаче массива в метод execute()
        unset($param['MAX_FILE_SIZE']);
        unset($param['confirm_pass']);
        unset($param['sign_up']);

        // если значения не были заполнены, то присваивает им значение null
        foreach ($param as $key => $value) {
            if ($value == '') {
                $param[$key] = null;
            }
        }
        // валидирует все данные и в случае успеха возвращает массив параметров
        if (self::validateText($param['first_name']) && self::validateText($param['last_name']) &&
            self::validateEmail($param['email']) && self::validatePassword($param['password']) &&
            self::validateDate($param['date']) && self::validateCountry($param['country']) && self::validateGender($param['gender'])) {
            return $param;
        }
        return false;
    }

    /**
     * Валидирует файлы по их расширению
     * @param $type - расширение файла
     * @param $types - массив допустимых расширений
     * @return bool
     */
    public static function validateFileExtension($type, $types)
    {
        return in_array($type, $types) ? true : false;
    }

    /**
     * Валидирует текстовые данные, где возможен ввод не только символов ASCII, а и UNICODE
     * @param $value
     * @return false|int
     */
    private function validateText($value)
    {
        return preg_match("/^\p{L}+$/u", $value);
    }

    /**
     * Валидирует пол пользователя
     * @param $value
     * @return bool
     */
    private function validateGender($value)
    {
        return $value == 'male' || $value == 'female';
    }

    /**
     * Валидирует страну
     * @param $value
     * @return bool
     */
    private function validateCountry($value)
    {
        return preg_match("/[\w\s\(\)]+/i", $value) || empty($value);
    }

    /**
     * Валидирует Email в соответствии с регулярным выражением
     * @param $value
     * @return false|int
     */
    public static function validateEmail($value)
    {
        return preg_match("/\w+(\.\w+)*@\D((?:[\w]+\.)+)([a-zA-Z]{2,4})/i", $value);
    }

    /**
     * Валидирует пароль в соответствии с выбраным шаблоном
     * @param $value
     * @return false|int
     */
    private function validatePassword($value)
    {
        return preg_match("/[\w\.-]{8,}/i", $value);
    }

    /**
     * Валидирует дату дня рожения пользователяж
     * @param $value
     * @return bool
     */
    private function validateDate($value)
    {
        return preg_match("/(\d){4}-(\d){2}-(\d){2}/i", $value) || empty($value);
    }
}