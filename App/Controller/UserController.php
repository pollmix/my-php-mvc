<?php

namespace App\Controller;

use Core\BaseController;
use App\Model\User;
use Core\View;

class UserController extends BaseController
{
    public function index()
    {
        View::render('users', ['users' => User::all()]);
    }
}