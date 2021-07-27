<?php

class Passenger{
    
    public function getPassenger(){
        $stmt = DB::connect()->prepare('SELECT * FROM passenger');
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;

    }

    public function insertPassenger($user_id, $reservation_id, $fullName, $age){
       for($i = 0; $i<count($fullName); $i++){
       $stmt = DB::connect()->prepare('INSERT INTO passenger (
            user_id,
            reservation_id,
            fullName,
            age
        )
        
        VALUES(
            :user_id,
            :reservation_id,
            :fullName,
            :age

        )');

        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':reservation_id', $reservation_id);
        $stmt->bindParam(':fullName', $fullName[$i]);
        $stmt->bindParam(':age', $age[$i]);

        $stmt->execute();
    }

    }
}