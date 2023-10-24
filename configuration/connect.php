<!-- Conexâo Com o Banco De Dados -->
<?php
    define('HOST', 'localhost');
    define('DBNAME', 'crud_mvc_poo_php');
    define('USER', 'root');
    define('PASSWORD', '');

    class Connect{
        protected $connection;

        function __construct(){
            $this->connectDatabase();
        }

         function connectDatabase(){
            try 
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD);
            } 
            catch (PDOException $e) 
            {
                echo "Error to connect with Database!".$e->getMessage();
                die();
            }
        } 

    }

?>
