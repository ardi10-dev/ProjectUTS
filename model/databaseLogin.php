<?php 

	class database{

		var $host = "localhost";
		var $uname = "root";
		var $pass = "";
		var $db = "projectuts";
		var $con;

		function __construct(){
			$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);\
			mysqli_select_db($this->con, $this->db);
		}

		function input( $username, $password){
			mysqli_query(mysqli_connect($this->host,$this->uname, $this->pass,$this->db),"insert into reseller
             values ('','$username', '$password')");
		}
		function login( $username, $password){
			mysqli_query(mysqli_connect($this->host,$this->uname, $this->pass,$this->db),"insert into reseller
             values ('','$username', '$password')");
		}


		
	}
 ?>