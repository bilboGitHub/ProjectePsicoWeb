<?php
class conexion extends PDO {
	
    private const DB_HOST="localhost";
    private const DB_NAME="psicoexperts_db";
    private const DB_USER="root";
    private const DB_PASS="";
	

	public function __construct() {
        //Sobreescric el mètode constructor de la classe PDO.
        try {
            parent::__construct('mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME, self::DB_USER, self::DB_PASS);
        } catch (PDOException $e) {
            echo 'Ha sorgit un error i no es pot connectar a la base de dades. Detall: ' . $e->getMessage();
            exit;
        }
    }
}
?>