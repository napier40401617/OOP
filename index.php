<?php

    // Create Class
    /*class Cat{

        //1. Porperties

        public $name = "Pan Pan";
        public $age = 6 ;


        // Methods

        function eat(string $food = "Meal"):string{

            return "Eat $food";
        }




    }


    //create Object

    $cat = new Cat;
    //echo $cat -> name; //call variable output

    //echo $cat->eat("Bone"); //call function
    $cat-> name = "Gote Kyar";

    echo $cat->name . ' ' . $cat->eat("Bone");
    

    */



    /* <------ Inheritance ------> */

    abstract class Animal{
        //public $name = "Min";
        public $name;

        abstract public function eat();
        
    }

    // class Dog extends Animal{

    //     //public $name;
    // }

    class Cat{
        //public $name;

         public function eat()
        {
            # code...
            echo "Eat food";
        }
    }

    // $dog = new Dog;
    // // $dog->name = "Aung Aung";

    // echo $dog->name;
    // echo $dog->eat();

    $cat  = new Cat;
    //$cat->name = "Shwe";

    echo $cat->eat();

    // $cat = new Cat;


    /* Inheritance test */
    // if(isset($cat->name)){
    //     echo $cat->name;
    // }else{
    //     echo "Shwe War";
    // }


    /* Abstract */

    //$a = new Animal;
    //echo $a->eat();

    