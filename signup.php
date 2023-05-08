<?php

    $alreadyexists = false;
    $created = false;
    $donotmatch = false;
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        include './database/_dbconnect.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $checkUnamesql = "SELECT * FROM `user` WHERE email = '$email';";
        $result = mysqli_query($connection , $checkUnamesql);
        $numberOfRowMatch = mysqli_num_rows($result);
        if($numberOfRowMatch > 0)
        {
            $alreadyexists = true;
        }
            
        else
        {
            $alreadyexists = false;
            $role = $_POST['role'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            if(($password == $cpassword ) && $alreadyexists==false)
            {
                // $hash = password_hash($password , PASSWORD_DEFAULT);
                // $sql = "INSERT INTO `user` (`name`, `role`, `email` , `password`,`date`) VALUES ('$name', '$role', '$email' , '$hash' ,  current_timestamp());";

                $sql = "INSERT INTO `user` (`name`, `role`, `email` , `password`,`date`) VALUES ('$name', '$role', '$email' , '$password' ,  current_timestamp());";
                
                $result = mysqli_query($connection , $sql);
                
                if($result)
                {
                    $created = true;
                }
                
                else
                {
                    echo mysqli_error($connection);
                }
            }
            
            else
            {
                $donotmatch = true;
            }
        }
}

?>