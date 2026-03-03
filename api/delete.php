<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "../config/database.php";
include_once "../models/game.php";

$database = new Database();
$db = $database->getConnection();
$game = new Game($db);

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->id)) {
    $game->id = $data->id;

    if($game->delete()) {
        http_response_code(200);
        echo json_encode(["message" => "Game berhasil dihapus."]);
    } else {
        http_response_code(503);
        echo json_encode(["message" => "Gagal menghapus game."]);
    }
} else {
    http_response_code(400);
    echo json_encode(["message" => "ID tidak ditemukan."]);
}
?>