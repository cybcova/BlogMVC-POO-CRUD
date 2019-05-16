<?php
require_once("model/Post.php");
require_once("model/PostManager.php");

if($_FILES['image']['error']){
  switch ($_FILES['image']['error']) {
    case 1:
      echo "Excede tamaño permitido por servidor";
      break;
    case 2:
      echo "Excede tamaño permitido";
      break;
    case 3:
      echo "El envio de archivo se interrumpio";
      break;
    case 4:
      echo "Fichero vacio";
      break;
    default:
      break;
  }
}

elseif ((isset($_FILES['image']['name'])&&($_FILES['image']['error']==UPLOAD_ERR_OK))){
    $destination='./images/';
    echo (move_uploaded_file($_FILES['image']['tmp_name'], $destination . $_FILES['image']['name'])) ? "<br>El archivo " . $_FILES['image']['name'] . " se ha subido" : "<br>El archivo no se ha podido subir";
}else{
  echo "<br>El archivo no se ha podido subir";
}

$post= new post();
$post->setTitle(htmlentities(addcslashes($_POST["title"], ENT_QUOTES)));
$post->setDate(date("Y-m-d H:i:s"));
$post->setComment(htmlentities(addcslashes($_POST["comments"], ENT_QUOTES)));
$post->setImage($_FILES["image"]["name"]);

$postManager= new PostManager();
$postManager->setContent($post);

?>