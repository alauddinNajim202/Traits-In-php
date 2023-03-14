<?php   

    interface loggerInterface{

        function log($log_msg);

    }

    class DatabaseLogger implements loggerInterface{

        function log($log_msg){
            echo "To database : ". $log_msg . "<br>";
        }
    }

    class fileLogger implements loggerInterface{

        function log($log_msg){
            echo "To file : ". $log_msg. "<br>";
        }
    }

    class terminalLogger implements loggerInterface{

        function log($log_msg){
            echo "To terminal : ". $log_msg. "<br>";
        }
    }

    trait loggertrait{
        protected $logger;

        public function setLogger(loggerInterface $logger){
            $this->logger = $logger;
        }

        function log($log_msg){
           if($this->logger){
                $this->logger->log($log_msg);
           }
        }
    }


    class SocketStream{

        use loggertrait;

    }

    class UserProfile{
        use loggertrait;
    }


    $socketstream = new SocketStream();
    $socketstream->setLogger(new terminalLogger);
    $socketstream->log("Socket stream message ....");


    $userprofile = new UserProfile();
    $userprofile->setLogger(new DatabaseLogger);
    $userprofile->log("User Profile added ....");




?>