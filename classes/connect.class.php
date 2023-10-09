<?php

class Connect extends EnvPointer {
    private $host;
    private $db_name;
    private $user;
    private $password;

    /**
     * Initialization from Loaded Variables in EnvPointer
     */
    function __construct () {
        $this->loadVariables();
        $this->host = getenv('_HOST');
        $this->db_name = getenv('_DBNAME');
        $this->user = getenv('_USER');
        $this->password = getenv('_PASSWORD');
    }

    /**
     * Primary connection to DB
     */
    protected function db_connect () {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;
        try {
            $conn = new PDO(
                $dsn, 
                $this->user, 
                $this->password, 
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
            );
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $conn;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}