<?php
    if(isset($_COOKIE['nombre']))
        include 'perfil_profesor.php';
        //otro archivo donde se instancien las funciones y el perfil del profesor
    else{
        header "Location: perfil_profesor.php";
    
    }
        
?>






