<?php


class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $tablename2;
        public $con;


        // class constructor
    public function __construct(
        $dbname = "nts",
        $tablename = "produkty",
        $tablename2 = "users",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
      $this->dbname = $dbname;
      $this->tablename = $tablename;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password);
        $this->con = mysqli_connect($servername, $username, $password, $dbname);

        /*$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            /$sql = " CREATE TABLE IF NOT EXISTS $tablename
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             nazwa_produktu VARCHAR (25) NOT NULL,
                             cena_produktu FLOAT,
                             zdjecie_produktu VARCHAR (100),
                             shortdesc VARCHAR (255),
                             longdesc VARCHAR (255)
                            );
                     CREATE TABLE IF NOT EXISTS $tablename2
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            email VARCHAR (255) NOT NULL,
                            username FLOAT,
                            password VARCHAR (255),
                            tel VARCHAR (255),
                            gender VARCHAR (255)
                            );";
        }else{
            return false;
        }*/
    }

    // get product from the database
    public function getData(){
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
        $sql2 = "SELECT * FROM $this->tablename2";

        $result2 = mysqli_query($this->con, $sql2);
        
        if(mysqli_num_rows($result2) > 0){
            return $result2;
        }
    }
}



