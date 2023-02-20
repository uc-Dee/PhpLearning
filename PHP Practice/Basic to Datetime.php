<!-- Variables and constants in php -->
<?php

    $var1 = "Deeksha Kulshreshtha"; 
    $var2 = "I am leaning PHP"; 
    $var3 = 1; 
    $var4 = 0.005; 
    $var5 = NULL; 

    echo var_dump($var1), "<br>"; 
    echo var_dump($var2), "<br>"; 
    echo var_dump($var3), "<br>"; 
    echo var_dump($var4), "<br>"; 
    echo var_dump($var5), "<br>"; 

    // PHP Datatypes

    $var1 = "String"; 
    $var2 = "Hello I am Deeksha Kulshreshtha";
    $var3 = 1; 
    $var4 = 0.007; 
    $var5 = "A";
    $var6 = NULL;  
    
    // Dattypes in PHP
    $var1 = "I am Deeksha"; 
    $var2 = "Hello"; 
    $var3 = 3; 
    $var4 = 9.004; 
    $var5 = 899999999999; 
    $var6 = NULL; 

    echo (var_dump($var1)), "\n"; 
    echo (var_dump($var2)), "\n"; 
    echo (var_dump($var3)), "\n"; 
    echo (var_dump($var4)), "\n"; 
    echo (var_dump($var5)), "\n";     
    echo (var_dump($var6)), "\n"; 

    // Type casting in PHP
    $var1 = "1234"; 
    $var2 = "234.234"; 
    $var3 = 234; 
    $var4 = 234.2342;
    $var5 = NULL; 

    (int)$var1;
    echo var_dump($var1);  
    used to convert string to integer
    echo number_format($var1); 
     
    // (float)$var3; 
    // echo var_dump($var3); 

    number_format($var3, 3); 
    echo var_dump($var3); 

    // PHP Syntax tutorial

    $var1 = "Hello"; 
    $var2 = "Hi"; 
    $var3 = 23; 
    $var4 = 2344.00; 
    $var5 = NUll; 
    $var6 = "I am good. \n you say!"; 

    echo $var1, "\t", $var2, "\n"; 
    echo $var3, "\n"; 
    echo $var3+$var4, "\n"; 
    echo $var5, "\n"; 
    echo $var6, "\n"; 

    Echo "This is the basic syantx of PHP"; 
    echo "Variables are case sensitive in php"; 

    // PHP Boolean datatype
    $var = 'True'; 
    $var2 = 'False'; 

    echo var_dump($var); 
    echo var_dump($var2);    


    // Integer datatype
    $var1 = 1; 
    $var2 = 234; 
    $var3 = 234848923849328; 
    $var4 = $var1 + $var2; 

    echo var_dump($var1), "\n"; 
    echo var_dump($var2), "\n"; 
    echo var_dump($var3), "\n"; 
    echo var_dump($var4), "\n"; 

    // Float Datatype
    $var1 = 234.23; 
    $var2 = 2473829.8999; 
    $var3 = 23.23893983943; 
    $var4 = 480934.7493; 
    $var5 = 849023.479238492038923; 

    echo var_dump($var1), "\n"; 
    echo var_dump($var2), "\n"; 
    echo var_dump($var3), "\n"; 
    echo var_dump($var4), "\n"; 
    echo var_dump($var5), "\n"; 

    // String Datatype in PHP
    $var1 = "Hello World"; 
    $var2 = "Deeksha"; 
    $var3 = "Kulshreshtha"; 
    $var4 = "Hi, I am learning PHP"; 
    $var5 = "Have a good day BBye"; 

    echo var_dump($var1), "\n"; 
    echo var_dump($var2), "\n"; 
    echo var_dump($var3), "\n"; 
    echo var_dump($var4), "\n"; 
    echo var_dump($var5), "\n"; 

    // PHP null datatype

    $var1 = NULL; 
    $var2 = "";

    echo var_dump($var1), "\n"; 
    // echo var_dump($var2), "\n";
    
    // Arrays in PHP
    // Integer Array in pHP
    $arr1 = array(1, 2, 3, 4); 

    // String Array in PHP
    $arr2 = array("Deeksha", "Kulshreshtha"); 

    // Associative array in PHP
    $arr3 = array("Name" => "Deeksha", "Branch" => "CSE"); 

    // Assosiative array in PHP
    $arr4 = array(array(1,2,3,4), array("Deeksha", "Kulshreshtha")); 

    // Expressions in PHP
    $var1 = 1; 
    $var2 = 23; 
    $var3 = 342.08; 
    $var4 = 43209.84320840; 

    echo $var1*$var2+$var4-$var3; 

    // Operators 
    $var1 = 34; 
    $var2 = 2348; 
    $var3 = 23.23; 
    $var4 = 89423.80; 

    // Arithmetic Operators
    echo "The Addition is: ", $var1+$var2, "\n"; 
    echo "The sbstraction is: ",$var1-$var2, "\n"; 
    echo "The multiplication is: ",$var1*$var2, "\n"; 
    echo "The division is: ",$var1/$var2, "\n"; 
    echo "The modulo is: ",$var1%$var2, "\n"; 

    // Assignment Operator
    $var1 += $var2; 
    $var2 -= $var2; 
    $var3 *= $var2; 
    $var4 += $var2; 

    echo "After addition assignment: ", $var1, "\n"; 
    echo "After substraction assignment: ", $var2, "\n"; 
    echo "After Multiplication assignment: ", $var3, "\n"; 
    echo "After division assignment: ", $var4, "\n";
    
    // Comparison Operators

    // Equals to 
    if($var1==$var2)
        echo "true";
    else echo "false";  

    // Greater than equals to
    if ($var1<=$var2)       
        echo "true"; 
    else echo "false";

    // less than equals to 
    if($var1 >= $var2)
        echo "true"; 
    else echo "false"; 

    // Not equals to 
    if($var1 != $var2)
        echo "true"; 
    else echo "false"; 

    // Operators part-2
    // Logical Operators
    $var1 = $var1 || $var1; 
    $var2 = $var2 & $var2; 
    
    echo "After OR: ", $var1, "\n"; 
    echo "After AND: ", $var2, "\n"; 
    
    // If-else Statements
    // Check whether a person can vote or not
    $age = (int)readline("Enter the age: "); 
    if($age>=18)
        echo ("You can vote.\n"); 
    else
        echo ("You can not vote\n"); 

    // WAP in PHP to find the grade of student
    $per = (float)readline("Enter the percentage of the student: "); 
    if($per>=50 & $per<60)
        echo "E\n"; 

    else if($per>=60 & $per<70)
        echo "D\n"; 

    else if($per>=70 & $per<80)
        echo "C\n"; 

    else if($per>=80 & $per<90)
        echo "B\n";

    else if($per>=90 & $per<=100)
        echo "A\n";
    else 
        echo "Fail\n"; 

    // Toggle the number by the month
    $num = (int)readline("Enter the month: "); 
    switch($num){
        case 1: 
            echo "January\n"; 
            break; 

        case 2: 
            echo "February\n"; 
            break;

        case 3: 
            echo "March\n"; 
            break;

        case 4: 
            echo "April\n"; 
            break;

        case 5: 
            echo "May\n"; 
            break;

        case 6: 
            echo "June\n"; 
            break;

        case 7: 
            echo "July\n";
            break;

        case 8: 
            echo "August\n"; 
            break;

        case 9: 
            echo "September\n"; 
            break;

        case 10: 
            echo "October\n"; 
            break;

        case 11: 
            echo "November\n"; 
            break;

        case 12: 
            echo "December\n"; 
            break;

        default: 
            echo "Invalid Input\n"; 
    }

    // WAP to check the day of the week by number
    $num = (int)readline("Enter the day of the week: "); 
    switch($num){
        case 1:
            echo "Sunday\n"; 
            break; 
        case 2:
            echo "Monday\n"; 
            break; 
        case 3:
            echo "Tuesday\n"; 
            break; 
        case 4:
            echo "Wedday\n"; 
            break; 
        case 5:
            echo "Thursday\n"; 
            break; 
        case 6:
            echo "Friday\n"; 
            break; 
        case 7:
            echo "Saturday\n"; 
            break; 
        default: 
            echo "Invalid Input\n"; 
    }

    // Loops in php 
    // Wap in php to print the factorial in php

    $num = (int)readline("Enter the number: \n"); 
    $fact = 1; 
    for($i=2; $i<=$num; $i++){
        $fact *= $i; 
    }
    echo "The factorial is: ", $fact, "\n"; 

    // WAP in php to find the reverse of a number
    $num = (int)readline("Enter the number: "); 

    $n = $num; 
    $rem = 0; 
    $rev = 0; 
    $new = 0; 

    while($n>0){
        $rem = $n%10; 
        $rev = $rev*10 + $rem; 
        $new = (int)($n/10);
        $n = $new; 
        echo $n, "\t"; 
    }

    echo "The reverse of the number is: ", $rev, "\n"; 

    // Foreach Loop in PHP
    $arr1 = array("Name"=>"Deeksha", "Branch" => "CSE", "Department" =>"Computer Science");
    echo "The values are: \n"; 
    foreach($arr1 as $key=>$value){
        echo $value, "\t"; 
    }

    // Functions in PHP
    // WAP in php to swap two numbers

    function swapper($name1, $name2){
        $temp = $name1; 
        $name1 = $name2; 
        $name2 = $temp;      
        echo "Name1: ", $name1, "\tName2: ", $name2, "\n";
    }

    $name1 = "Deeksha"; 
    $name2 = "Pooja"; 
    
    swapper($name1, $name2); 

    //Playing with Date and Time 
    echo "Today is " . date("Y/m/d") . "\n";
    echo "Today is ".date("d/m/Y l"). "\n"; 

    echo "current time is: ", date("h: i: sa"), "\n";  

    // Playing with date time objects
    // Display the current server time and day
    // l - stands for day

    // Time and day
    echo "Current time is: ", date("h: i: sa l"); 

    // Day month and year
    echo "Today's : ", date("d/m/Y"), "\n"; 

    // Mondth-day-year
    echo "Today's : ", date("m/d/Y"), "\n"; 

    // month-day-year DayName
    echo "Today's : ", date("m/d/Y l"), "\n"; 

    // Year-month-day Dayname hours minutes, seconds and am or pm
    echo "Today's : ", date("Y/m/d l h: i: sa"), "\n"; 

    // dayname day-month-year, hours minutes, seconds, am or pm
    echo "Today's : ", date("l d/m/Y h: i: sa"), "\n"; 


    // mktime(hours, minutes, seconds, month, day, year)

    $st = mktime(12, 05, 04, 04, 27, 2023); 
    echo "The date created is: ", date("d/m/Y  h: i: sa", $st), "\n"; 

    $strr = strtotime("13:01: 57 May 27 2023"); 
    echo "Today is: ". date("d/m/Y h: i: sa", $strr); 

    // mktime() and strtotime()

    $mt = mktime(12, 45, 23, 07, 23, 2023); 
    echo "Today is: ", date("d/m/Y h: i: sa", $mt); 
 
    $stt = strtotime("12: 34: 12pm May 27 2023"); 
    echo "Date and time is: ", date("d/m/Y h: i: sa", $stt);  



?>
