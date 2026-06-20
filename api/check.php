<?php
header('Content-Type: application/json; charset=utf-8');
$server = "168.222.20.141";
$port = 30120;

$urls = [
    "http://{$server}:{$port}/players.json",
    "http://{$server}:{$port}/info.json"
];

$response = @file_get_contents($urls[0]);
if ($response === FALSE) {
    echo json_encode(["error" => "ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ได้"]);
    exit;
}

echo $response;
?>
