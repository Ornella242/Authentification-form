<?php
 

 include('connect.php');


   if(isset($_GET['connexion']))
  {
    echo '<p style="color:red;">Votre pseudo, email et  votre mot de passe sont incorrects!</p>';
  }

  ?> 
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>Admin</title>
  </head>
  <body id="admin">

       <h1 class="fw-light " style="text-shadow:1px 1px 1px black;">Inscrivez-vous</h1>
        
        <form action="verification.php" method="post">
            <input type="text" name="pseudo" class="form-control"placeholder="Pseudo ou Email" required> <br><br>
            <input name="pwd" type="password" class="form-control" placeholder="Password" required > <br> <br>
            <input name="submit" type="submit" class="form-control btn btn-primary" id="submit" value="Envoyer"> <br> <br>
            
            
       </form>
         
           
        
  </body>
  </html>
