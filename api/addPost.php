<?php
session_start();
include_once './bd.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (array_key_exists('token', $_SESSION)) {
        $token = $_SESSION['token'];

        // Получаем ID пользователя по токену
        $stmt = $bd->prepare("SELECT id FROM users WHERE api_token = :token");
        $stmt->bindParam(':token', $token);
        $stmt->execute();
        $userId = $stmt->fetchColumn();

        if (!$userId) {
            unset($_SESSION['token']);
            header('Location: ../login.php');
            exit;
        }

        // Получаем данные из POST-запроса с проверкой на существование
        $animalType = $_POST['type'] ?? null;
        $description = $_POST['deac'] ?? null;
        $mark = $_POST['mark'] ?? null;
        $address = $_POST['address'] ?? null;
        $date = $_POST['date'] ?? null;

        // Подготовка запроса для вставки данных в БД
        $insertStmt = $bd->prepare("
            INSERT INTO posts (user_id, type_animal, description, mark, address, date_found)
            VALUES (:user_id, :type, :description, :mark, :address, :date)
        ");

        // Привязываем параметры
        $insertStmt->bindParam(':user_id', $userId);
        $insertStmt->bindParam(':type', $animalType);
        $insertStmt->bindParam(':description', $description);
        $insertStmt->bindParam(':mark', $mark);
        $insertStmt->bindParam(':address', $address);
        $insertStmt->bindParam(':date', $date);

        // Выполняем запрос и проверяем на ошибки
        if ($insertStmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Данные успешно записаны']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Ошибка при записи данных']);
        }

    } else {
        // Если токена нет, редиректим на страницу логина
        header('Location: ../login.php');
        exit;
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Запрос не верный']);
}
?>
