<?php
    readfile("text.txt"); 
    readfile('1.jpg'); 
    readfile('1.html'); 
    // echo $a;

    // Opening the file
    $ptr = fopen("text.txt", 'r'); 
    if(!$ptr){
        die("Unable to open a file. Please enter a valid username."); 
    } 
    
    // Reading the file upto the last character
    $content = fread($ptr, filesize('text.txt')); 
    fclose($ptr); 
    echo $content; 

    // Writing the content in the file using commands itself
    $ptr = fopen('text.txt', 'w'); 
    $txt = "Today I am leanring about the file operations.\n"; 
    fwrite($ptr, $txt); 
    $txt = "I am feeling excited about my work.\n"; 
    fwrite($ptr, $txt); 
    fclose($ptr);


    // Reading the content of the updated file
     $ptr = fopen('text.txt', 'r') or die("Failure!"); 
    echo (fread($ptr, filesize('text.txt'))); 
    fclose($ptr);  

    // Reading mulitple lines using fgets()
    $ptr = fopen('text.txt', 'r'); 
    while($content = fgets($ptr)){
        echo($content); 
    }
    fclose($ptr); 
    echo "The file is closed"; 

    // WAP in php to read the lines until the full stop has not been encountered.
    $ptr = fopen('practice.txt', 'r'); 
    while($content = fgetc($ptr)){
        if($content == '.')
            break; 
        echo($content); 
    }
    fclose($ptr); 

    // Cookies

?>