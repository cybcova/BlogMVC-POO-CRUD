<?php

class Connect{
	public static function link(){
		try{
			$link=new PDO('mysql:hos=localhost; dbname=covaBlog','root', '');
			$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$link->exec("SET CHARACTER SET UTF8");
		}
		catch(Exception $e){
			die("Error". $e->getMessage());
			echo "Linea del error" . $e->getLine();
		}
		return $link;
	}
}

?>