<?php
class UserController extends Controller{
    public function __construct()
    {
        $this->modelPage = $this->model('User');
    }


    public function gotologin(){
        $data = ['title' => 'login'];
        $this->view('login', $data);
    }

    public function login(){


        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = ['title' => 'login',
                "email" => $_POST['email'],
                "password" => $_POST['password']
            ];


 
        
            // var_dump($this->modelPage);
            $user = $this->modelPage->checkuser($data['email'], $data['password']);
            
            if ($user) {
                session_start();  

                $_SESSION['user_id'] = $user->id;
                $_SESSION['user_name'] = $user->firstName;

                print_r($_SESSION);
                // var_dump($_SESSION);

                // $this->bananas();
                
                header('Location: /ccmvc/FlightController/dashboard');

                
            } else {
                // $this->view('login', $data);

                echo "USER NOT FOUND";

            }
       }
        //    $this->view('login');
        
       
    }

    // public function bananas(){
        
    //     $this->view('bananas');
    // }

    public function logout(){
       
        session_unset();
         session_destroy();
        // var_dump($_SESSION);
       
        header('location: /ccmvc/UserController/gotologin');
    }
    
}