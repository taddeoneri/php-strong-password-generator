<?php 
    function randomPassword($usernumber){
        if($usernumber >= 8){
            $characters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            $length = strlen($characters) - 1;
            $password = [];
            for($i = 0; $i < $usernumber; $i++){
                $n = rand(0, $length);
                $password[$i] = $characters[$n];
            }
            return $password;
        }
        else{ 
          
        } 
    }
?>

