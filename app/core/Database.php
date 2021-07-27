<?php
class Database
{
    private string $user = 'root';
    private string $host = 'localhost';
    private string $password = '';
    private string $database = 'resonly';
    private PDO $database_command;
    private $stmt;
    private $error;


    public function __construct()
    {

        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->database;
        $options = array(PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        try {
            $this->database_command = new PDO($dsn, $this->user, $this->password, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public function query($sql)
    {
        $this->stmt = $this->database_command->prepare($sql);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }


 
    public function execute()
    {
        return $this->stmt->execute();
    }


    public function fetch_as_obj()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

  
    public function fetch_all_as_arr()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function rowCount(){
        return $this->stmt->rowCount();
    }
}