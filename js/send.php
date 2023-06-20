<?php

    $name = $_POST['email']; 

    $email_content .= "User name: $name\n";
 
    
    mail ("olyasorrohtey@gmail.com", "WP Sites application", $email_content);
?>