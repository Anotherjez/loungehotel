<?php

    class Connection{

        public $myCon = null;
        static $instancia = null;

        function __construct(){
            $this->myCon = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        }

        function __destruct(){
            mysqli_close($this->myCon);
        }
        public static function testconnection(){
            if(self::$instancia == null){
                self::$instancia = new Connection();
                return true;                
            }            
        }
        public static function execute($sql){

            if(self::$instancia == null){
                self::$instancia = new Connection();
            }

            $rs = mysqli_query(self::$instancia->myCon, $sql);

            return $rs;
        }
        public static function query_arr($sql){

            if(self::$instancia == null){
                self::$instancia = new Connection();
            }
            $rs = mysqli_query(self::$instancia->myCon, $sql);
            $final = [];

            while($row = mysqli_fetch_assoc($rs)){
                $final[] = $row;
            }

            return $final;
        }
        
    }

?>