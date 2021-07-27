<?php

class FlightController extends Controller {

    public function __construct()
    {
        $this->modelPage = $this->model('Flight');
    }



    public function getAllFlights(){
        $flightObj = new Flight();
        $flights = $flightObj->getFlight();
        return $flights;
    }



    public function dashboard(){
        $this->view('bananas');
    }
}