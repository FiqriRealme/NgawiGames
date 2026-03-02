<?php
header("Content-Type: application/json; charset=UTF-8");
include_once '../config/Database.php';
include_once '../models/Game.php';

$database = new Database();
$db = $database->getConnection();
$game = new Game($db);

$stmt = $game->read();
$num = $stmt->rowCount();

if($num > 0) {
    $games_arr = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $games_arr[] = [
    "id" => $id,
    "title" => $judul,
    "price" => $harga
];
    }
    http_response_code(200);
    echo json_encode($games_arr);
} else {
    http_response_code(404);
    echo json_encode(["message" => "Data tidak ditemukan."]);
}
?>