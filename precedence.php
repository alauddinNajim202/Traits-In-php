<?php

    trait loggerTrait {
        public function show(){
            echo "Logger trait function";
        }
    }

    class baseClass {

        //use loggerTrait;
        public function show(){
            echo "Base class function";
        }
        
    }

    class childClass extends baseClass{
        use loggerTrait;
        
    }

    $obj = new childClass();
    $obj->show();




?>