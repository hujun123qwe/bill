<?php
	class SQLTool{
		private $conn;
		private $ip="127.0.0.1";
		private $password="root";
		private $name = "root";
		private $db = "bill";

		function SQLTool(){
			$this->conn = mysql_connect($this->ip, $this->name, $this->password);
			if(!$this->conn){
				die("链接数据库失败");
			}
			mysql_select_db("bill");
			mysql_query("set names utf8");
		}

		public function execute_dql($sql){
			$res = mysql_query($sql, $this->conn) or die(mysql_error());
			return $res;
		}

		public function execute_dml($sql){
			$b = mysql_query($sql, $this->conn) or die(mysql_error());
			if(!$b){
				return 0;
			}else{
				if(mysql_affected_rows($tihs->conn)>0){
					return 1; //succeed;
				}else{
					return 2;
				}
			}
		}
	}
?>