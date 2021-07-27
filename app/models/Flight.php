<?php 

class Flight{

    public function getflight(){
        $stmt = DB::connect()->prepare("SELECT * FROM flight");
         $stmt->execute();
         $results = $stmt->fetchAll();
         return $results;
    }
}