<?php
class Game {
    private $conn;
    private $table_name = "games";

    public $id;
    public $judul;
    public $harga;
    public $genre;
    public $deskripsi;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (judul, harga, genre, deskripsi) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$this->judul, $this->harga, $this->genre, $this->deskripsi]);
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET judul = ?, harga = ?, genre = ?, deskripsi = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$this->judul, $this->harga, $this->genre, $this->deskripsi, $this->id]);
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$this->id]);
    }
}
?>