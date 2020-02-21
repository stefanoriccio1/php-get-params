<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
// var_dump($_GET);
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];
$message = '';

if (empty($name) || empty($age) || empty($email)){

  $message = 'Errore';
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>snack2</title>
  </head>
  <body>
    <h1><?php echo $name?></h1>
    <h2><?php echo $age?></h2>
    <h3><?php echo $email?></h3>
    <h4><?php echo $message?></h4>
  </body>
</html>
