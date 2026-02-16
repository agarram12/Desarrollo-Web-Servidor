<?php
    class  Database {
        
        public static function conectar()
        {
            $mysqli = new mysqli('localhost', 'root', '', 'cine');
            $mysqli->set_charset("utf-8");

            return $mysqli;
        }
    }

?>