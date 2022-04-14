<?php
	/*Constantes de conexión a la base de datos*/
	define('DB_HOST','localhost');
	 /*Normalmente es localhost pero a veces puede cambiar*/
    define('DB_USER','root');
     /*Usuario administrador de la base de datos a la que nos vamos a conectar*/
    define('DB_PASS','');
    /*Password de la base de datos a la que nos conectemos*/
    define('DB_NAME','japanbar');
    /*Nombre de la base de datos*/
    define('DB_CHARSET','utf8');
    /*Para que la codificación de lo que almacenamos en la base de datos sea UTF-8*/

    class Conexion{
    	 protected $db;
    	 public function __construct(){
	    	$this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	        if ($this->db->connect_errno){
	            echo "Fallo al conectar a MySQL: ". $this->db->connect_error;
	            return;
	        }
	        $this->db->set_charset(DB_CHARSET);
	    }
	    public function query($sql){
    		return $this->db->query($sql);
	    }

	    public function close(){
	        return $this->db->close();
	    }

	    public function error(){
	    	return $this->db->error;
	    }

	    public function errno(){
	    	return $this->db->errno;
	    }
    }

?>
