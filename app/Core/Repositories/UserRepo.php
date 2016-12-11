<?php
namespace App\Core\Repositories;

use App\Core\Entities\User;

class UserRepo 
{
    
    public function getUsers()
    {
        return User::select('*')->get();
    }
}