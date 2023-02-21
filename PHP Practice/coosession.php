session_start(); 
<?php

    // We are dealing with cookies
    echo("We are setting up the cookies \n"); 
    setcookie("category", "books", time()+86400, "/"); 

    if(count($_COOKIE)>0){
        echo "The cookie is set."; 
    }
    else{
        echo "The cookie is not set."; 
    } 

    // Playing with sessions

    // Creating some session variables
    $_SESSION["Name"] = "Deeksha"; 
    $_SESSION["Branch"] = "CSE"; 

    // Checking the values of the session variables
    print_r($_SESSION); 

    // Updating the session variables
    $_SESSION["Name"] = "Prashansa"; 
    $_SESSION["Branch"] = "Artificial Intelligence"; 

    // Checking whether the variables get updated or not
    print_r($_SESSION); 

    // Removing the session variables
    session_unset(); 

    // destroying the session
    session_destroy(); 


?>