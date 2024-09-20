<?php

class Database {
    private $connection;

    public function __construct() {
        $username = "root";
        $password = "@.happy!";
        $database = "server-admin";
        $host = "localhost";

        $this->connection = new mysqli($host, $username, $password, $database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function login($username, $password) {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function signup($username, $password) {
        $stmt = $this->connection->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function __destruct() {
        $this->connection->close();
    }
}

?>