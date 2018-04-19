<?php

class Home extends Controller
{

    public function index($name= '')
    {
        $this->view('temp/head_up', ['css'=> 'home/index']);
        $this->view('temp/head_down', ['css'=> 'home/index']);
        $this->view('home/index', ['name' => $name]);
        
        
    }

    public function create($username = '' , $email = ''){
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }

    public function test()
    {
        //取出傳進來的參數陣列;
        $args = func_get_args();
        //取出傳進來的參數數量;
        $num = func_num_args();
        
        echo print_r($args);

    }

}