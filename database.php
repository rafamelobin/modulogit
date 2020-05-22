
<?php

 class Database
{
    private static $dbName = 'PESSOA_PDO' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = 'root';
     
    private static $conn = null;
    private static $stmt = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }


     
    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$conn )
       {     
     
        try {

          self::$conn =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
          //echo"<br>bd conectado<br>";
		// self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIONPDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);

        }  catch(PDOException $e){

          die($e->getMessage()); 

        }

     
      }
      
       return self::$conn;
    }
     

    //finish the connection with Mysql 
    public static function disconnect()
    {
   
        self::$conn = null;
    }

    
    
  
  

}

?>