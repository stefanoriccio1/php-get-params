<?php $password = $_GET["password"];
if ($password == "Boolean"){
  $class= "green";
  $messaggio= "hai indovinato!";
}
else {
  $class ="red";
  $messaggio = "ritenta, sarai più fortunato!";
};

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Get</title>
  </head>
  <body>
   <h1 class = "<?php $class ?>"><?php $messaggio ?></h1>
  </body>
</html>
