<?php
$book = [
    'title'=> 'La Raison',
    'author' => 'Douglas Adams',
    'description' => 'Love Story',
];

$characters = [
    'Amber Heard',
    'Johnny Deep',
    'Daniel Craig',
    'Eminem',
];
    ?>
    
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <title>Facility N°.5</title>
   </head>
   <body>
     
     
      <!--Titre-->
       <h1><?php echo $book['title'] ?></h1>      
       <!--description-->
       <p><?php echo $book['description'] ?></p>   
          
          
       <!--Titre-->
       <h2>Personnages Principaux</h2>      
       <!--Liste personnages-->
       <p><?php print_r ($characters) ?></p>      
      
       
   </body>
   </html>