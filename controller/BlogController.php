<?php

require_once("model/PostManager.php");

$postManager= new PostManager();
$result=$postManager->getContent();

require_once("view/blogView.php");



?>