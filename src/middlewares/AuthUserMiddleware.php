<?php

namespace src\middlewares;

class AuthUserMiddleware
{
    public static function authUser()
    {
        if(isset($_SESSION['auth_user']))
        {
            return true;
        }
        else 
        {
            return false;
        }
        
       
    }
}




?>