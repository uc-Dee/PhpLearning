<!-- 1. Opening a file 
2. Reading a file
3. Writing someting into the file
4. Reading an updated file
5. Reading a file line by line
6. Reading a file character by character
7. closing a file  -->

<?php
    // Reading a file
    echo("I am playing with files. "); 
    $ptr = fopen('hello.txt', 'r'); 
    $content = fread($ptr, filesize('hello.txt')); 
    echo $content; 
    fclose($ptr); 

    // Writing a file
    $ptr = fopen('hello.txt', 'a+'); 
    $txt = "\nI have to make hurry."; 
    fwrite($ptr, $txt); 
    fclose($ptr); 

    // Reading an updated file
    $ptr = fopen('hello.txt', 'r'); 
    $content = fread($ptr, filesize('hello.txt')); 
    fclose($ptr); 
    echo $content; 

    // Reading a line of the file
    $ptr = fopen('hello.txt', 'r'); 
    echo (fgets($ptr)); 

    // Reading a file line by line
    $ptr = fopen('hello.txt',"r"); 
    while($content = fgets($ptr)){
        echo $content; 
    }
    fclose($ptr); 

    // Reading a file character by character
    $ptr = fopen('hello.txt', 'r'); 
    while($content = fgetc($ptr)){
        if($content == ',')
            break; 
        echo $content, '\n'; 
    }
    echo "We are out of while loop. "; 
    fclose($ptr); 

?>