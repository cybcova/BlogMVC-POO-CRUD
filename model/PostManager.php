<?php
include("Connect.php");
class PostManager{
	private $link;
	private $result;
	
	public function __construct(){
		require_once("model/Connect.php");
		$this->link=Connect::link();
		$this->result=array();
	}

	public function getContent(){
		require_once("Post.php");
		$record=$this->link->query("SELECT * FROM contenido ORDER BY fecha DESC");
		while ($row=$record->fetch(PDO::FETCH_ASSOC)) {
			$post=new Post();
			$post->setId($row["id"]);
			$post->setTitle($row["titulo"]);
			$post->setDate($row["fecha"]);
			$post->setComment($row["comentario"]);
			$post->setImage($row["imagen"]);
			$posts[]=$post;
		}
		if(isset($posts)) return $posts;
	}

	public function setContent(Post $post){
		$query="INSERT INTO contenido (titulo, fecha, comentario, imagen) VALUES (?,?,?,?)";

		if(!$stmt=$this->link->prepare($query))
			echo "<br>Error description prepare: " . $this->$link->connect_error; 
		elseif(!$stmt->execute(array($post->getTitle(), $post->getDate(), $post->getComment(), $post->getImage() )))
			 echo "<br>Error description execute: " . $this->$link->connect_error;
	}
}

?>