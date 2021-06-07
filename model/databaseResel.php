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

		function tampil_data(){
			$data = mysqli_query($this->con, "select * from reseller");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function input($nama, $gender, $email,  $alamat, $username, $password){
			mysqli_query(mysqli_connect($this->host,$this->uname, $this->pass,$this->db),"insert into reseller
             values ('', '$nama', '$gender', '$email', '$alamat', '$username', '$password')");
		}


		function hapus($id){
			mysqli_query(mysqli_connect($this->host,$this->uname, $this->pass,$this->db),
            "delete from reseller where id='$id'");
		}
		
		

		function edit($id){
			$data = mysqli_query(mysqli_connect($this->host,$this->uname, $this->pass,$this->db),
            "select * from reseller where id=$id");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function update($id, $nama, $gender, $email, $alamat,$username){
			mysqli_query($this->con,
			"update reseller set nama='$nama',gender='$gender', email='$email', alamat='$alamat',username='$username'
			 where id=$id ");
		}
	}
 ?>