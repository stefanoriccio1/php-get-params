<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      .green{
        background-color: green;
      }
      .grey{
        background-color: grey;
      }
    </style>
    <title>Snack4</title>
  </head>
  <body>
   <div class="green">
     <?php for ($i=0; $i < count($db['pm']) ; $i++) {

       echo $db['pm'][$i]['name'] ." " .$db['pm'][$i]['lastname'];
     }
     ?>
   </div>
   <div class="grey">
     <?php for ($i=0; $i < count($db['pm']) ; $i++) {

       echo $db['teachers'][$i]['name'] ." " .$db['teachers'][$i]['lastname'];
     }
     ?>
   </div>
  </body>
</html>
