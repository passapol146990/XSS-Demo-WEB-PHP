<?php
require_once 'db.php';

$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($request, PHP_URL_PATH);

if ($method == "GET") {
    switch ($path) {
        case '/':
            $sql = "SELECT * FROM messages ORDER BY id DESC";
            $result = $conn->query($sql);
            $messages = [];
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $messages[] = $row;
                }
            };
            require_once '../views/home.php';
            exit();
        case '/create':
            require_once '../views/form.php';
            exit();
        default:
            header("Location:/");
            break;
    }
} else if ($method == "POST") {
    switch ($path) {
        case '/api/add/message':
            $msg = $_POST['message'];
            $sql = "INSERT INTO messages (message) VALUES (?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $msg);
            $stmt->execute();
            $stmt->close();
            header("Location:/");
            break;
        default:
            header("Location:/");
            break;
    }
} else {
    header("Location:/");
}
