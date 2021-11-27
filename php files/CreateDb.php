<?php 
class CreateDb
{
    public $servername;
    public $usernames;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    //change server name to something else, since we are not using localhost for this example.
    public function __construct($dbname = "munchiesDB", $tablename = "Productdb", $servername = "localhost", $username = "root", $password = ""){

        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        //create connection

        $this->con=mysqli_connect($servername,$username,$password);

        //Check connection

        if(!$this->con){
            die("Connection failed:".mysqli_connect_error());
        }
        // else{
        //     echo "created successfully";
        // }

        //query

        $sql = "CREATE DATABASE IF IT DOES NOT EXIST $dbname";

        //Execute the query

        if(mysqli_query(($this->con), $sql)){
            $this->con = mysqli_connect($servername,$username,$password,$dbname);

            $sql = "CREATE TABLE IF IT DOES NOT EXIST $tablename
            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARYKEY
            product_name VARCHAR(25) NOT NULL,
            product_price FLOAT,
            product_image VARCHAR(100)
            
            );";

            if(mysqli_query($this->con,$sql)){
                echo "Error creating a table:".mysqli_error($this->con);
            }

        }else{
            return false;
        }


    }   
}

// $newDB = new CreateDb();