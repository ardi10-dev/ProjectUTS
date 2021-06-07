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
			$data = mysqli_query($this->con, "select * from transaksi");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function input($nohp, $jenis, $provider,  $nominal){
			mysqli_query(mysqli_connect($this->host,$this->uname, $this->pass,$this->db),"insert into transaksi
             values ('', '$nohp', '$jenis', '$provider', '$nominal')");
		}

		function hapus($id){
			mysqli_query(mysqli_connect($this->host,$this->uname, $this->pass,$this->db),
            "delete from transaksi where id='$id'");
		}

		function edit($id){
			$data = mysqli_query(mysqli_connect($this->host,$this->uname, $this->pass,$this->db),
            "select * from transaksi where id=$id");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function update($id, $nohp, $jenis, $provider, $nominal){
			mysqli_query($this->con,
            "update transaksi set nohp='$nohp',jenis='$jenis',provider='$provider',nominal='$nominal'
			 where id='$id'");
		}
	}
 ?>