<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "../config/database.php";
include_once "../models/game.php";

$database = new Database();
$db = $database->getConnection();
$game = new Game($db);

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->judul) && !empty($data->harga) && !empty($data->genre) && !empty($data->deskripsi)) {
    $game->judul = $data->judul;
    $game->harga = $data->harga;
    $game->genre = $data->genre;
    $game->deskripsi = $data->deskripsi;

    if($game->create()) {
        http_response_code(201);
        echo json_encode(["message" => "Game berhasil ditambahkan."]);
    } else {
        http_response_code(503);
        echo json_encode(["message" => "Gagal menambahkan game."]);
    }
} else {
    http_response_code(400);
    echo json_encode(["message" => "Data tidak lengkap."]);
}
?>