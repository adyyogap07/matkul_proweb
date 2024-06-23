<?php

class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "crud";
    private $connection;


    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->db);

        if ($this->connection->connect_error) {
            die("Koneksi gagal: " . $this->connection->connect_error);
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    public function query($sql) {
        return $this->connection->query($sql);
    }

    public function fetchAssoc($result) {
        return $result->fetch_assoc();
    }

    public function fetchAll($result) {
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function escapeString($string) {
        return $this->connection->real_escape_string($string);
    }

    public function close() {
        $this->connection->close();
    }
}

?>
