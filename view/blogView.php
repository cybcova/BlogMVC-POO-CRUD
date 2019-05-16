<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MVC</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>
<body>
<table>
<?php

if($result)
foreach ($result as $row) {
  echo "<h3>" . $row->getTitle() . "</h3>";
  echo "<h4>" . $row->getDate() . "</h4>";
  echo "<div style='width:400px'>" . $row->getComment() . "</div><br/><br/>";
  if($row->getImage()){
    echo "<img src='images/" . $row->getImage() . "' width='300px' />";
  }
  echo "<hr/>";
}


?>

</table>

<a href="index.php?pagina=post">Agregar post</a>
</body>
</html>