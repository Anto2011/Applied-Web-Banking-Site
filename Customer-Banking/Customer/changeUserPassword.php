<?php

class changePassowrd{

    public oldPassword;
    public NewPassword;

    function function __construct($oldPassword; $newPassword){

        this->oldPassword=oldPassword;
        this->newPassword=newPassword;
    }

    function validate(){

             if(empty($_POST["psw"])){
            $password_error = "password is required";
    }else{
            $password = cleanup_data($_POST["psw"]);
    }

    if(empty($_POST["psw2"])){
        $password2_error = "password2 is required";
    }else{
        $password2 = cleanup_data($_POST["psw2"]);
    //check is name only contains letters and whitespace
    if($password != $password2){
            $password2_error = "password dont match";
    }
    }
    }



}






?>