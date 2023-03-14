<?php

    trait student{

        public function Info1(){
            echo "Information from student trait  class <br>";
        }

        public function method(){
            echo "Method from student trait  class <br>";
        }

    }

    trait teacher{
        public function Info(){
            echo "Information from teacher trait  class <br>";
        }

        public function method(){
            echo "Method from teacher trait  class <br>";
        }
    }

    trait manager{

        public function Info(){
            echo "Information from manager trait  class <br>";
        }

        public function method(){
            echo "Method from manager trait  class <br>";
        }
    }

    class person {

        use student, teacher, manager{
            teacher :: method insteadof student, manager;
            manager :: Info insteadOf student , teacher;
        }

    }

    $ob = new person();
    $ob->Info();
    $ob->method();



    



?>