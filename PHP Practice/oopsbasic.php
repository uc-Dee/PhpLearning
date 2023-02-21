<?php
    echo "We are learning about OOPs basic programs<br>"; 
    class Information{

        public $name; 
        public $branch; 

        function set_name($name){
            $this->name = $name; 
        }

        function get_name(){
            return $this->name; 
        }
    }

    $deeksha = new Information(); 
    $pooja = new Information(); 
    $prachi = new Information(); 

    $deeksha->set_name("deeksha");
    $pooja->set_name("pooja");
    $prachi->set_name("prachi");

    echo ($deeksha->name), "<br>"; 
    echo ($pooja->name), "<br>"; 
    echo ($prachi->name), "<br>"; 

    echo $deeksha->get_name(), "<br>"; 
    echo $pooja->get_name(), "<br>"; 
    echo $prachi->get_name(), "<br>"; 

    // How to check the data type of an object
    echo var_dump ($deeksha); 

    // OOps Basic Operation

    // Creation of a class

    class Information{

        public $name; 
        public $branch; 

        // Set the name of the variable $name
        function set_name($name){
            $this->name = $name; 
        }

        // Return the value of the variable $name
        function get_name(){
            return $this->name; 
        }

        // Used to set the branch
        function set_branch($branch){
            return $this->branch = $branch; 
        }
        
        // Used to display the branch
        function get_branch(){
            return $this->branch; 
        }
    }

    // Instanciation of the objects
    $deeksha = new Information(); 
    $pooja = new Information(); 
    $prachi = new Information(); 

    // Setting the name of the instances using set_name method
    $deeksha->set_name("Deeksha"); 
    $pooja->set_name("Pooja"); 
    $prachi->set_name("Prachi"); 

    // Retreving the name using get_name
    echo "We are retreving using get_name<br>"; 
    echo $deeksha->get_name(), "<br>"; 
    echo $pooja->get_name(), "<br>"; 
    echo $prachi->get_name(), "<br>"; 

    // Updating the name using exteranl updation
    $deeksha->name = "deeksha"; 
    $pooja->name = "pooja"; 
    $prachi->name = "prachi"; 

    // Displaying the name using echo statement
    echo "We are retreving using echo statement<br>"; 
    echo $deeksha->name, "<br>";
    echo $pooja->name, "<br>";
    echo $prachi->name, "<br>";

    // Constructor in PHP

    class Information{

        public $name; 
        public $branch;
        
        // Constructor Function
        function __construct($name, $branch)
        {
            $this->name = $name; 
            $this->branch = $branch; 
        }

        // Function used to display the data
        function get_data(){
            echo "The name of the student is: ". $this->name, "<br>"; 
            echo "The branch of the student is: ". $this->branch, "<br>"; 
        }

        // Destructor
        function __destruct(){
            echo $this->name. " has been distanciated.<br>"; 
        }
    }

    // Instanciating the objects
    $deeksha = new Information('Deeksha', 'Computer Science'); 
    $pooja = new Information('Pooja', 'Rocket Science'); 
    $prachi = new Information('Prachi', 'Astro Science'); 

    // Fetching the data
    echo "The data of the students is as follow<br>";
    $deeksha->get_data(); 
    $prachi->get_data(); 
    $pooja->get_data(); 


    // Access Modifiers in PHP

    class Information{

        public $name; 
        protected $profile;
        private $salary; 
        
        // Function to set the data
        function set_data($name, $profile, $salary){
            $this->name = $name; 
            $this->profile = $profile; 
            $this->salary = $salary; 
        }

        // Function to get the data
        function get_data(){
            echo "Name: ", $this->name, "<br>"; 
            echo "Profile: ", $this->profile, "<br>"; 
            echo "Salary: ", $this->salary, "<br>"; 
        }
    }

    // Instanciating the objects
    $deeksha = new Information(); 
    $pooja = new Information(); 
    $prachi = new Information(); 

    $pooja->set_data("Pooja", "SME", 17000);  
    $pooja->get_data();  
    

    //  Static methods in PHP

    // Calling an static method without instanciating object
    class Information{

        public static function Greetings(){
            echo "Hello World!<br>"; 
        }
    }

    Information::Greetings(); 
    
    // Accessing the static method of another class from a different class
    class College{
        
        function Calling(){
            echo "We are inside College>Calling<br>"; 
            Information::Greetings(); 
        }
    }

    $demo = new College; 
    $demo->Calling(); 

    // Accessing the static method of self class 
    class Information{

        public static function Greetings(){
            echo "Hello World"; 
        }

        function Calling(){
            echo "I am inside self>Calling<br>"; 
            self::Greetings(); 
        }
    }

    $demo = new Information; 
    $demo->Calling(); 

    // Accessing the static fucntion from parent class
    class Information{

        public static function Greetings(){
            echo "Hello World!"; 
        }
    }

    class College extends Information{

        function Calling(){
            echo "I am inisde College>Calling in child class.<br>"; 
            parent::Greetings(); 
        }
    }

    $demo = new College; 
    $demo->Calling(); 

?>