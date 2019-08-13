# Authorization / Registration Form

Форма регистрации/авторизации пользователя на РНР(без фреймворков)

Валидация и верификация пользовательского ввода как на клиенте, так и на сервере.

После регистрации отображается профайл пользователя с возможностью его редактирования.

Реализована мультиязычность(английский, русский, украинский).

Дамп БД находится в файле [registration.sql](https://github.com/radvic985/registration/blob/master/registration.sql)

Параметры для подключения к БД прописаны в файле [configDB.php](https://github.com/radvic985/registration/blob/master/configDB.php)

# Для запуска проекта:

1. Склонируйте репозиторий локально: git clone git@github.com:radvic985/registration.git
2. Имортируйте БД из файла указаного выше(**registration.sql**)
3. Измените параметры подключения к БД в файле **configDB.php**
