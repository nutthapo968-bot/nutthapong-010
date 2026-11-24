<?php
header('Content-Type: application/json; charset=utf-8');


$users = [
    ['id' => 1, 'name' => 'สมชาย', 'email' => 'somchai@example.com'],
    ['id' => 2, 'name' => 'สมหญิง', 'email' => 'somying@example.com'],
];


$id = $_GET['id'] ?? null;


if ($id) {
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            echo json_encode(['status' => 'success', 'data' => $user], JSON_UNESCAPED_UNICODE);
            exit;
        }
    }
    http_response_code(404);
    echo json_encode(['status' => 'error', 'message' => 'ไม่พบข้อมูล'], JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(['status' => 'success', 'data' => $users], JSON_UNESCAPED_UNICODE);
}