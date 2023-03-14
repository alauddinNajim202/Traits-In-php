<?php

    trait Loggertrait{
        protected $logger;

        public  function log($message){

            $this->logger = $message;
            echo $this->logger;

        }

    }


    trait LogOuttrait{
        protected $logger;

        public  function logOut($message){

            $this->logger = $message;
            echo $this->logger;

        }

    }

    class UserProfile{
        use Loggertrait;
    }

    class CompanyProfile{
        use Loggertrait;
        use LogOuttrait;
    }

    $user = new UserProfile();
    $user->log("User created successfullly ! <br>");

    
    $company = new CompanyProfile();
    $company->log("<br> Company created successfullly !");
    $company->logOut("<br> Company log out successfullly !");





?>