<?php

class Db {
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    protected function connect() {
        $this->host = "php-task-demo-db-1";
        $this->username = "user1";
        $this->password = "password";
        $this->dbname = "testdb";
        $this->charset = "utf8mb4";

        try {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $pdo;
        } catch (PDOException $e) {
            echo "Connection Failed: ".$e->getMessage();
        }
    }
}
