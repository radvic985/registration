<?php
require_once('lib/ConnectDB.php');

if (isset($_GET['get'])) { // ajax запрос для получения списка всех стран
    $sql = "SELECT * FROM `countries`";
    $pdo = ConnectDB::connect();
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $countries = [];
    foreach ($result as $country) {
        $countries[] = $country['country'];
    }
    echo json_encode($countries);
}
