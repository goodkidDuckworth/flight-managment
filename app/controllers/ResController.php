<?php 

class ResController extends Controller{
    

    public function newRes()
    {
        $user_id = $_POST['user_id']; 
        $flight_id = $_POST['flight_id']; 
        $this->modelPage = $this->model('Reservation');
        $this->modelPage->newRes($user_id, $flight_id);
        
    }

    public function getAllRes(){
        $user_id = $_SESSION['user_id']; 
        $this->modelPage = $this->model('Reservation');
        $var = $this->modelPage->getRes($user_id);

        return $var;

        // $ResObj = new Flight();
        // $Reservations = $ResObj->getRes();
        // return $Reservations;
    }

    public function cancel(){
        $res_id = $_POST['res_id'];
        $this->modelPage = $this->model('Reservation');
        $this->modelPage->cancelRes($res_id);

    }

    public function dashboard(){
        $this->view('reservations');
    }
}