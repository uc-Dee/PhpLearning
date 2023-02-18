<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicing Printing command over here</title>
</head>

<body>
    <?php

    echo " Hello World! \n";
    echo "Learning PHP is a fun!\n";

    $para = "If you will focus on the looks you have to keep in mind that your looks will be appealing to only 1 or may be 2 
    people as everyone's choice will be different. But if you will become good by your work then there are so many 
    people who will appeal you. ";

    $para2 = "So, Deeksha focus on your work! And things will automatically happen.\n";

    echo "$para+$para2";

    $num = 6;
    echo $num;

    // Printing statements using echo statement
    echo " Hello World\n";
    echo " Deeksha is a nice girl\n";
    echo " PHP is a secured programming language.\n";
    echo " Tanish sir is my trainer\n";
    echo " Megha ma'am is my manager.\n";
    echo " Ayush sir is my office head. \n";
    echo " Yesterday was his birthday\n";
    echo " I am making some php examples!\n";
    echo " I will give it my best shot\n";
    echo " Jouney is more important rather then destination\n";
    echo " There should be one goal in life, instead of goal nothing should be in life.\n";

    // Defining Variables and print them using echo

    $var1 = "Life ";
    $var2 = "is ";
    $var3 = "not ";
    $var4 = "the ";
    $var5 = "bad ";
    $var6 = "of ";
    $var7 = 'roses ';

    // Forming a sentence by clubing the statements; 
    echo " It will print the statments altogether.\n";
    echo $var1, $var2, $var3, $var4, $var5, $var6, $var7;

    // Clubing statments with variables
    echo " The value of variable 1 is : " . $var1 . "<br>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo " The value of variable 2 is : " . $var2 . "</br> \n";
    echo " The value of variable 3 is : " . $var3 . "</br> \n";
    echo " The value of variable 4 is : " . $var4 . "</br> \n";
    echo " The value of variable 5 is : " . $var5 . "</br> \n";
    echo " The value of variable 6 is : " . $var6 . "</br> \n";
    echo " The value of variable 7 is : " . $var7 . "</br> \n";

    // The problem here is that it is printing br tag also.

    // Implementation of mathematical fuctions in PHP
    echo "The value of pi() is: ", pi(), "\n";
    echo "The value of min() is: ", min(1, 2, 3, 4, -134, 1.9090, 0), "\n";
    echo "The value of max() is: ", max(-2300, -9090, 0.343), "\n";
    echo "The value of rand() is: ", rand(), "\n";
    echo "The value of rand(start, end) is: ", rand(10, 10000), "\n";
    echo "The value of abs() is: ", abs(-89.907), "\n";
    echo "The value of sqrt() is: ", sqrt(16), "\n";
    echo "The value of round() is: ", round(8.9089), "\n";

    // Examples of if-else statements 
    $name = "Deeksha";

    if ($name == "PHP")
        echo "You are PHP master!\n\n";
    else
        echo "Journey is more important then destination!\n\n";


    // Check whether a person can vote or not
    $age = (int) readline("Enter the age: ");
    if ($age < 18)
        echo " You can not vote.\n\n";
    else
        echo " You can vote.\n\n";

    // Wishing time zone
    $t = date("H");
    echo " The server hour is : ", $t;
    if ($t < 12)
        echo " Good Morning \n\n";

    else
        echo " Good Night \n\n";


    // 

    // switch case enter the number from 1-12 and we will tell you the month. 
    $mon = (int)readline("Enter the number between 1-12: ");
    switch ($mon) {
        case 1:
            echo ("January\n\n");
            break;

        case 2:
            echo ("February\n\n");
            break;

        case 3:
            echo ("March\n\n");
            break;

        case 4:
            echo ("April\n\n");
            break;

        case 5:
            echo ("May\n\n");
            break;

        case 6:
            echo ("June\n\n");
            break;

        case 7:
            echo ("July\n\n");
            break;

        case 8:
            echo ("August\n\n");
            break;

        case 9:
            echo ("September\n\n");
            break;

        case 10:
            echo ("Octotber\n\n");
            break;

        case 11:
            echo ("November\n\n");
            break;

        case 12:
            echo ("December\n\n");
            break;

        default:
            echo ("Invalid Input\n\n");
    }

    // While Loop 
    // Program to check whether a number is Palidrome or not 
    $num = (int)readline("Enter a number: \n\n");
    $n = $num;
    echo ("the vlaue of n is : "), $n, "\n";

    $rem = 0;
    $rev = 0;
    while ($n > 0) {
        $rem = $n % 10;
        $rev = $rev * 10 + $rem;
        $div = $n / 10;
        $n = (int)$div;
    }

    echo ("The value of rev is: "), $rev, "\n\n";

    if ($rev == $num) {
        echo ("The number is armstrong\n\n");
    } else {
        echo ("The number is not armstrong\n\n");
    }

    // Program to check whether a number is armstrong or not
    $num = (int)readline("Enter a number: \n\n");
    $n = $num;

    $arm = 0;
    while ($n > 0) {
        $rem = $n % 10;
        $arm = $arm + $rem ** 3;
        $div = $n / 10;
        $n = (int)$div;
    }

    if ($arm == $num)
        echo ("The number is armstrong\n\n");
    else
        echo ("The number is not armstrong\n\n");

    // For Loop
    // Program of Fibonacci series 

    function fibo($n)
    {
        if ($n == 1 || $n == 0) {
            return $n;
        } else return (fibo($n - 1) + fibo($n - 2));
    }

    $num = (int)readline("Enter the number: \n");
    echo ("The series is as follow: \n\n");
    for ($i = 1; $i <= $num; $i++) {
        echo (fibo($i)), "\t";
    }

    $start = 0;
    $end = 1;
    for ($i = 1; $i <= $num; $i++) {
        $res = $start + $end;
        echo ($res), "\t";
        $start = $end;
        $end = $res;
    }


    // Fucntions
    // Swap two numbers using function
    $num1 = (int)readline("Enter number1: ");
    $num2 = (int)readline("Enter number2: ");

    function swap($num1, $num2)
    {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;

        echo ("The swapped values are: "), $num1, " ", $num2, "\n";
    }

    swap($num1, $num2);

    // Write the program of counting the factorial of a number
    $num = (int)readline("Enter the number: ");

    function factorial($num)
    {
        if ($num == 0)
            return 1;

        else if ($num < 0)
            return 0;

        else if ($num == 1)
            return 1;

        else {
            return $num * factorial($num - 1);
        }
    }

    echo ("The factorial of "), $num, " is: ", factorial($num);
    echo ("\n");

    // Array
    echo ("The elements of array are: ");
    $num = array(1, 2, 3, 4, 5);
    foreach ($num as $i)
        echo ($i), " ";
    echo ("\n");

    $char = array('a', 'b', 'c', 'd', 'e', 'f');
    echo ("Char array is as follow: ");
    foreach ($char as $ch)
        echo ($ch), " ";
    echo ("\n");

    // taking the array input from user
    $user = array();
    $len = (int)readline("Enter the size of the array: ");
    echo ("Enter the elements: \n");
    for ($i = 1; $i <= $len; $i++) {
        $user[$i] = (int)readline();
    }

    echo ("Enter the elements are: \n");
    foreach ($user as $j)
        echo ($j), " ";


    // Assosiative array
    $user = array('Hello' => '11', 'What' => '12', 'why' => '13');
    foreach ($user as $key => $value)
        echo $key, " => ", $value, "\n";

    $dict = array("Name" => "Deeksha", "Branch" => "CSE", "Subject" => "PHP");
    foreach ($dict as $key => $value) {
        echo $key, " => ", $value, "\n";
    }

    $abc = array("Apple", "Banana", "Cherry", "Papaya");
    echo ("The elements are: ");
    sort($abc);
    foreach ($abc as $i) {
        echo ($i), " ";
    }
    echo ("\n");

    $use = array("Name" => "Deeksha", "Branch" => "CSE");
    foreach ($use as $key => $value) {
        echo $key, " => ", $value, "\n";
    }

    arsort($use);
    krsort($use);
    foreach ($use as $key => $value) {
        echo $key, " => ", $value, "\n";
    }

    // Example of fucntion calling by reference
    $name = "Deeksha";
    $name1 = "Kulshreshtha";

    function swap(&$val1, &$val2)
    {
        $temp = $val1;
        $val1 = $val2;
        $val2 = $temp;
    }

    swap($name, $name1);
    echo ("Strings after sorting are: "), $name, " and ", $name1;


    //  Multidimensioanl array
    $mul = array(
        array("Deeksha", "Pooja", "Vanshi", "Prachi"),
        array(1, 2, 3, 4, 5),
        array("My name", "is ABC")
    );

    foreach ($mul as $subarr) {
        foreach ($subarr as $j) {
            echo $j, ", ";
        }
        echo "\n";
    }


    // defining the local and gloabal scopes of the variables
    $a = 5;
    $b = 4;
    function check()
    {
        global $a, $b;
        $a = 500;
        $b = 100;
        echo "The values of $a and $b are: ", $a, ", ", $b, "\n";
    }

    check();
    echo "The values are: $a, $b";


    //  Use of PHP superglobals to submit the data
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }


    ?>
</body>

</html>