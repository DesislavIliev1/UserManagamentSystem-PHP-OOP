<?php




class Database {
  

    private $host = 'localhost';
    private $db = 'user_db';
    private $user = 'root';
    private $password = '';

    protected function connect(){
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->db;
        $pdo = new PDO($dsn, $this->user, $this->password );
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;

    }



    
}