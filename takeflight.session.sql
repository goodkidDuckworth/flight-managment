SELECT * FROM reservation
INNER JOIN user ON user.id = reservation.user_id
INNER JOIN flight ON flight.id = reservation.flight_id
WHERE user_id = '2'
         