<?php
require_once('lib/ConnectDB.php'); // класс подключенния к БД
require_once('lib/Validator.php'); // класс валидации данных

class User
{
    const TABLE = 'users';

    /**
     * Сохраняет данные пользователя при регистрации и редактировании его профайла
     * @param array $param
     * @return bool
     */
    public static function saveUser(array $param)
    {
        $param = Validator::validate($param); // валидация всех данных пользователя
        if (!empty($param)) {
            $param['password'] = self::passwordHash($param['password']); // создает хэш для пароля
            if (isset($param['edit']) && $param['edit'] == 'yes') { // условие для редактирования профайла
                $sql = "UPDATE " . self::TABLE . " SET `first_name` = :first_name, `last_name` = :last_name, `email` = :email, `gender` = :gender, `date_birth` = :date_birth, `country` = :country, `password` = :password, `file` = :file WHERE `email` = :old_email";
                unset($param['edit']);
            } else { // условие для регистрации нового пользователя
                $sql = "INSERT INTO " . self::TABLE . " (`first_name`, `last_name`, `email`, `gender`, `date_birth`, `country`, `password`, `file`) VALUES (:first_name, :last_name, :email, :gender, :date_birth, :country, :password, :file);";
            }
            $pdo = ConnectDB::connect();
            $stmt = $pdo->prepare($sql); // подготавливает строку запроса с именованными параметрами
            $stmt->execute($param); // выполняет запрос с массивом для именованных параметров
            return true;
        }
        return false;
    }

    /**
     * Получает данные пользователя по его Email
     * @param $param
     * @return bool
     */
    public static function getUserByEmail($param)
    {
        if (Validator::validateEmail($param['email'])) { // проверяет валидность Email
            $sql = "SELECT * FROM " . self::TABLE . " WHERE `email` = :email;";
            $pdo = ConnectDB::connect();
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['email' => $param['email']]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (self::checkPassword($param['password'], $result[0]['password'])) { // верифицирует пользователя по Email
                return $result[0];
            }
            return false;
        }
    }

    /**
     * Верифицирует пользователя по Email
     * @param $pass - введённый Email
     * @param $hash - хэш пароля из БД
     * @return bool
     */
    private function checkPassword($pass, $hash)
    {
        return password_verify($pass, $hash);
    }

    /**
     * Хэширует пароль
     * @param $pass
     * @return bool|string
     */
    private function passwordHash($pass)
    {
        return password_hash($pass, PASSWORD_BCRYPT);
    }
}