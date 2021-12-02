<?php

    include('connect.php');

    if (isset($_POST['pseudo']) && isset($_POST['pwd'])) {
        if (!empty($_POST['pseudo']) && !empty($_POST['pwd'])){
        $pseudo =htmlspecialchars(addslashes( $_POST['pseudo'])) ;
        $pwd = htmlspecialchars(md5($_POST['pwd']));
       
        if(filter_var($pseudo,FILTER_VALIDATE_EMAIL)){
            $sql ='SELECT*  FROM inscris WHERE email=:pseudo AND pwd=:pwd';
      
        }else{
            $sql ='SELECT*  FROM inscris WHERE pseudo=:pseudo AND pwd=:pwd';
          
        }

        $sql_requete=$pdo->prepare($sql);
        $sql_requete->execute(array('pseudo'=>$pseudo,'pwd'=>$pwd));
        $tr=$sql_requete->rowCount();
        if($tr>0){
            echo"Membre";
                }else{
                    header('Location:index.php?errorMembre');
                }
 
        }
       
      
    }

?>
  
