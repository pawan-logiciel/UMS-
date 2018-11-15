<?php 

class connect {
	public  function make($config) {
		try {
			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password']
			);
		}
	 	catch(PDOException $e) {
	 		die('could not connect');
	 	}
	}
}
?>