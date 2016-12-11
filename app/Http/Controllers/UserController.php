<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Core\Repositories\UserRepo;

class UserController extends Controller
{
    
    protected $UserRepo;
    
    public function __construct(UserRepo $UserRepo)
    {
        $this->UserRepo = $UserRepo;
    }
    
    public function getUsers()
    {
        
        $users = $this->UserRepo->getUsers();
        dd($users);
    }
    
}