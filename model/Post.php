<?php

class Post{
//Propiedades post
	private $id, $title, $date, $comment, $image;
//Metodo de post
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id=$id;
	}

	public function getTitle(){
		return $this->title;
	}

	public function setTitle($title){
		$this->title=$title;
	}

	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date=$date;
	}
	public function getComment(){
		return $this->comment;
	}

	public function setComment($comment){
		$this->comment=$comment;
	}
	public function getImage(){
		return $this->image;
	}

	public function setImage($image){
		$this->image=$image;
	}
}

?>