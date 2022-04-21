<?php

// class Dog{


//     // public function __construct($name)
//     // {
//     //     # code...
//     //     echo "I am Constructor. $name <br/>";
//     // }

//     // public function hello($name){
//     //     echo "Hello $name! <br/>";
//     // }

//     // public function __destruct(){
//     //     echo "I am Destructor.";
//     // }

//     private $name;

//     public function __construct($name){

//         $this->name = $name;
//     }

//     public function getName(){
//         echo $this->name;
//     }
// }

// $ani = new Dog('Nu Nu');
// echo $ani->getName();


/* Interface */

// interface Mail{
//     public function send();
// }

// // abstract class Mail{
// //     abstract public function send();
// // }

// class Gmail implements Mail{

//     public function send(){
//         echo "Send Hello!";
//     }
// }

// class Outlookmail implements Mail{

//     public function send(){
//         echo "Send Email.";
//     }
//     public function sendMail(){
//         echo "Send Outlook Mail.";
//     }
// }


// class Yahoo{
//     public function mysend(){
//         echo "Send Yahoo.";
//     }
// }

// $gmail = new Gmail;
// $gmail->send();


/* --- Call function in a class from another class --- */

interface Mailinterface{
    public function send();
}

class Gmail implements Mailinterface{

        public function send(){
            echo "Send Hello!!!";
        }
}

class Outlook implements Mailinterface{

    public function send(){
        echo "Send Outlook!!!";
    }
}

class Mail{

    private $name;

    public function __construct(Mailinterface $gmail){  //assign Object data type (Gmail $gmail)

        $this->name = $gmail;

    }

    public function send(){
        $this->name->send();
    }
}

$mail = new Mail(new Mail);
$mail = new Mail(new Outlook);
$mail->send();







