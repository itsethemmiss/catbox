<?php
session_start();
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['email']) && $data['email'] === 'gg.suii999@gmail.com') {
    $_SESSION['signedInEmail'] = $data['email'];
    $_SESSION['allowed'] = true;  // Add this flag
    http_response_code(200);
    echo json_encode(['status' => 'success']);
} else {
    http_response_code(403);
    echo json_encode(['status' => 'forbidden']);
}
?>
