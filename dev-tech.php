<?php

    function users(){
        $usernames = [ 'Jerry', 'Johnson', 'Mike','Nsongurua', 'Mia'];
        foreach ($usernames as $username){
            if (strlen($username) < 6){
                $rand = rand(100,999);
                $username = $username . $rand;
            } else if (strlen($username) > 8){
                $username = "The username {$username} shouldn't be greater than 8 characters";
                
            }
            // echo $username . "<br>";
        $a[] = $username ;
        // print_r($a);   
        // echo "<br>";
        }

        // echo "<br>";
   
        $passwords = ['ace','bdf','ceg','dfh','egi'];
        foreach ($passwords as $password){
            $randomNum = rand(100,999);
            $password = $password . $randomNum . $password;
            // echo $password . "<br>";
            $b[] = $password;
            // print_r($b);
            // echo "<br>";
        }

        // echo "<br>";

        for($i = 0 ; $i < 5 ; $i++ ){
            
            echo "Username: " . $a[$i];
            echo "<br>";
            echo "Password: " . $b[$i];
            echo "<br>";
            echo "<br>";
        }

    }

    users();

?>