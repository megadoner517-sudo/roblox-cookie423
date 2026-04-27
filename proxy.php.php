<?php
header('Access-Control-Allow-Origin: *');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $webhook = "https://discord.com/api/webhooks/1498370184749256886/iP4blLVbwpMG5HdS_KvuOYJZR6cf5cFnOoR28kkJDUFzMfKwjKQyR-_MX7gkhONyF1vC";
    
    $data = file_get_contents('php://input');
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $webhook);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
}
?>