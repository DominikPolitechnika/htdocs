<?php
class database{
    protected string $dbname="announcements";
    protected string $dbhost="localhost";
    protected string $dbuser="root";
    protected null|string $dbpass=null;

    public function connection() : PDO
    {
        return new PDO("mysql:dbname=$this->dbname;host=$this->dbhost",$this->dbuser,$this->dbpass);
    }
    public function pull($size=null) : PDOStatement|false{
        $PDO=$this->connection();
        //if($size==null){
            $sql="SELECT * FROM announcment";
        //}
        return $PDO->query($sql);

    }
}


?>