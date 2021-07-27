<?php

class PassengerController extends Controller{
    public function __construct()
    {
        $this->modelPage = $this->model('Passenger');
    }

    public function getAllPassengers(){
        $passengerObj = new Passenger();
        $passengers = $passengerObj->getPassenger();
        return $passengers;
    }
    
    public function newPassenger(){
        $user_id = $_POST['user_id'];
        $reservation_id = $_POST['res_id'];
        $fullName = $_POST['fullName'];
        $age = $_POST['age'];
        $this->modelPage = $this->model('Passenger');
        $this->modelPage->insertPassenger($user_id, $reservation_id, $fullName, $age);
    }

    public function creation(){
        $this->view('passenger');
    }

    public function dashboard(){
        // var_dump($_POST);
        $this->view('passengerList');
    }

     


}