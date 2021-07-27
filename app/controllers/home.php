<?php

class Home extends Controller{


    public function index($data = ''){
        // $user = $this->model('User');
        // $user->name = $name;
        $data = ['title' => 'Home'];
        $this->view('bananas',$data);
    }
   

    
}