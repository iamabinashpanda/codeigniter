<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function login()
    {
        return view('login');
    }
    public function signup()
    {
        $data= [];
        helper('form');
        if($this->request->getMethod()=='post')
        {
            echo '222';
            exit;
        }
        return view('signup');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
