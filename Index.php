<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MVC</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>
<body>
<?php

if(!isset($_GET["pagina"]) || $_GET["pagina"]=="blog") require_once("controller/BlogController.php");
if(isset($_GET["pagina"]) && $_GET["pagina"]=="post") require_once("controller/FormController.php");
if(isset($_POST["title"])) require_once("controller/PostController.php");
?>
</body>
</html>