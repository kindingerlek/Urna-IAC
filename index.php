<?php
    if(!isset($_SESSION["VOTEBEM"]))
    {
      session_start();
      header( "refresh:0;url=view/login.php" );
    }
    else
    {
        header( "refresh:0;url=view/login.php" );
    }    
?>

