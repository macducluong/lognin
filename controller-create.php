<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $reenterpassword=$_POST['reenterpassword'];
    if (empty($email)&&empty($password)&&empty($name)&&empty($reenterpassword)){
        echo'';
    }elseif (empty($email) or empty($password) or empty($name) or empty($reenterpassword)){
        if (empty($email)){
            echo 'you do not email'.'<br>';
        }
        if (empty($password)){
            echo 'you do not password'.'<br>';
        }
        if(empty($name)){
            echo 'you do not name'.'<br>';
        }
        if(empty($reenterpassword)){
            echo 'you do not re-enter password'.'<br>';
        }
    }else{
        if ($reenterpassword!==$password){
            echo'Wrong password'.'<br>';
        }elseif($reenterpassword===$password){
            echo 'Sign Up Success'.'<br>';
            echo 'name:'.$name.'<br>';
            echo 'email: '.$email.'<br>';
            echo 'password: '.$password;
        }

    }
}else{

}
?>