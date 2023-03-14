<?php


    trait loggerTrait{

        public function log($message){
            echo "Log : ".$message . "<br>";
        }
        abstract public function info();

        public function increment(){
            // static property
            static $value = 0;
            $value++;
            echo "$value <br>";
        }

        // static method
        public static  function staticMethod(){
            echo "Static method ";
        }
    }

    trait TaxCalculateTrait {

        static $number = 5;// static property

        use loggerTrait; 

        public function increment1(){
            
            self:: $number++;
            echo self::$number ."<br>";
        }

        public function calculateTax(){
            echo "Tax Calculator trait <br>";
        }
    }

    class productInfo{
        
        use TaxCalculateTrait;
        public function info(){
            echo "trait information  <br>";
        }
    }


    $obj = new productInfo();
    $obj->calculateTax();
    $obj->log("Logger trait");
    $obj->info();


    // static value 
    echo "Static property and method used: <br> ";
    $obj->increment();

    $obj2 = new productInfo();
    $obj2->increment();

    $obj3 = new productInfo();
    $obj3->increment1();

    $obj4 = new productInfo();
    $obj4->increment1();

    productInfo :: staticMethod();



?>