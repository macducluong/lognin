<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if (empty($email)&&empty($password)){
        echo''.'<br>';
    }elseif (empty($email) or empty($password)){
        if (empty($email)){
            echo 'you do not email'.'<br>';
        }
        if (empty($password)){
            echo 'you do not password'.'<br>';
        }
    }else{
            echo 'logged in successfully'.'<br>';
            echo 'email: '.$email.'<br>';
            echo 'password: '.$password;
        }

}else{

}
?>