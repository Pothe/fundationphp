<?php
class dbconn{
// property 
private $host="localhost";
private $user ="root";
private $pass="";
private $dbnm="glossary";
// handle connection 
private $dbh;
// handle errmsg
private $errmsg;
// handle stmt statement 
private $stmt;



// method
public function __construct()
{

    $dns ="mysql:host=".$this->host.";dbname=".$this->dbnm;
    $options =array(
        PDO::ATTR_PERSISTENT =>true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

    );
    try{
        $this->dbh= new PDO($dns,$this->user,$this->pass,$options);
        //echo "Database is connected";
        
    }catch(Exception $err){
        $this->errmsg = $err->getMessage();
        echo  $this->errmsg ;
    }
    
}
// Method
     // function query 
     public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }
    // creating  a bind function 
    public function bindValue($param,$value,$type){
        $this->stmt->bindValue($param,$value,$type);
    }
    // Function to execute statement
    public function execute(){
        return $this->stmt->execute();
          
      }
    //​ Function to check if statement was successfully executed
    public function confirm(){
        $this->dbh->lastInsertId();
    }
    //Command to fetch data in a result set in associative array
    public function fetchMulti(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
     //Command count fetched data in a result set 
     public function fetchSingle(){
         $this->execute();
         return $this->stmt->fetch(PDO::FETCH_ASSOC);
     }

}



?>