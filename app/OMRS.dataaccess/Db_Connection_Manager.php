<?php 

class Database{
    private $host = "localhost";
    private $db_name = "omrs_db";
    private $username = "root";
    private $password = "";

    public function connect() {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $exception) {

            //Error Message
            echo "Connection error: " . $exception->getMessage();
        }
        return $conn;
    }
}
?>