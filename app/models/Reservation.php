<?php


class Reservation{

    public function getRes($user_id){
        $stmt = DB::connect()->prepare("SELECT * FROM reservation
        INNER JOIN user ON user.id = reservation.user_id
        INNER JOIN flight ON flight.id = reservation.flight_id
        WHERE user_id = $user_id
        ");
         $stmt->execute();

         $results = $stmt->fetchAll();
         return $results;


    }

    public function newRes($user_id, $flight_id){
        $stmt = DB::connect()->prepare("INSERT INTO reservation (
            user_id,
            flight_id
        )
        
        VALUES(
            :user_id,
            :flight_id
        )
        ");

        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':flight_id', $flight_id);

        $stmt->execute();
    }

    public function cancelRes($id){
        $stmt = DB::connect()->prepare("DELETE FROM reservation WHERE :id = $id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}