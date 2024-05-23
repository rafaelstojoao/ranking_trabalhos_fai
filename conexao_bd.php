<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'fai_ranking';
    private $username = 'admin_ranking_fai';
    private $password = '1a2b3c4d@2024';
    private $conn;

    public function connect() {
        $this->conn = null;

        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;
            $this->conn = new PDO($dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>
