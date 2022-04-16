<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserCreateController extends Controller
{
    public function index()
    {

       return Inertia::render('Users/User');
    }
    public function create()
    {
        return Inertia::render('Users/Create');
    }
    public function submitUser()
    {
        
    }
}
