<?php
    class db{

        //Propriedades
        private $dbhost = 'localhost';
        private $dbuser = 'root';
        private $dbpass = '';
        private $dbname = 'testelocal';

        //Conexão
        public function connect(){
            $mysql_connection_str = "mysql:host=$this->dbhost; dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connection_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }