<?php

    trait sampleTrait{

        private $privateProperty;
        protected $protectedProperty;
        public $publicProperty;

            private function privateMethod(){
                echo "Private method <br>";
            }

            protected function protectedMethod(){
                echo "Protected method <br>";
            } 
            
            public function publicMethod(){
                echo "Public method <br>";
            }

    }

    class sampleClass{
        use sampleTrait;

        public function classMethod(){
            $this->privateMethod();
            echo "Class method";
        }
    }

    $obj = new sampleClass();
    $obj->privateMethod();
    $obj->protectedMethod();
    $obj->publicMethod();
    $obj->classMethod();





?>