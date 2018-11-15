<?php 

class query {

	public $pdo;

	public function __construct($pdo) {

		$this->pdo=$pdo;
	}

	public function select($table) {

	 	$statement=$this->pdo->prepare("select * from {$table}");	
		$statement->execute();
		return $statement;
	}

	public function selectbyid($table,$id) {

	 	$statement=$this->pdo->prepare("select * from {$table} where id = {$id}");	
		$statement->execute();
		return $statement;
	}

	public function insert($table,$parameters) {

		$sql=sprintf(
			'insert into %s (%s) values (%s)',
			 $table,
			 implode(',',array_keys($parameters)),
			 ':'.implode(', :',array_keys($parameters))
		);
		$statement=$this->pdo->prepare($sql);
		$statement->execute($parameters);
	}

	public function updatestatus($table,$parameters,$email) {

		$sql=sprintf(
			"UPDATE %s set %s = '%s' where email = '$email'",
			 $table,
			 implode(',',array_keys($parameters)),
			 ':'.implode(', :',array_values($parameters))
		);
		$statement=$this->pdo->prepare($sql);
		$statement->execute($parameters);
	}
	
	public function updatepage($table,$title,$metakey,$metadesc,$desc,$status,$id) {
      
        $sql = "UPDATE $table set title = '$title',metakeyword = '$metakey', metadesc = '$metadesc', description = '$desc' ,status = '$status' where id = '$id' ";
	
		$statement=$this->pdo->prepare($sql);
		$statement->execute();
	}

	public function update($table,$name,$username,$email,$status,$id) {
      
        $sql = "UPDATE $table set name = '$name',email = '$email', username = '$username', status = '$status' where id = '$id' ";
	
		$statement=$this->pdo->prepare($sql);
		$statement->execute();
	}

	public function matchpass($user,$pass) {

		if (($user=='iampavanarora@gmail.com')&&($pass==123456)) {
			header("Location: /homepage");
		}
		else {
			echo "invalid id or pass";
		}
	}
	public function delete($table,$id) {
		$sql=sprintf(
			'DELETE FROM %s WHERE id = %s',
			 $table,
			 $id
		);
		$statement=$this->pdo->prepare($sql);
		$statement->execute($parameters);
	}


}

 ?>