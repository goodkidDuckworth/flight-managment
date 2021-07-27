-- @BLOCK
CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    first_name VARCHAR (50) NOT NULL, 
    last_name VARCHAR (50) NOT NULL, 
    email VARCHAR (50) NOT NULL,
    password VARCHAR (50) NOT NULL,
    age INT(3) NOT NULL
    )

-- @block
CREATE TABLE reservation (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_id INT NOT NULL,
    flight_id INT NOT NULL,

    FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE,
    FOREIGN KEY (flight_id) REFERENCES flight(id) ON DELETE CASCADE
)


-- @BLOCK
CREATE TABLE passenger (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_id INT NOT NULL,
    reservation_id INT NOT NULL,
    fullName VARCHAR(20) NOT NULL,
    age INT NOT NULL,

    FOREIGN KEY (user_id) REFERENCES user(id),
    FOREIGN KEY (reservation_id) REFERENCES reservation(id)
)

-- @BLOCK
CREATE TABLE flight(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    origin VARCHAR(50) NOT NULL,
    destination VARCHAR(50) NOT NULL,
    date DATE NOT NULL,
    type VARCHAR(50) NOT NULL
)

-- @BLOCK
INSERT INTO flight (
    origin,
    destination,
    date,
    type
)

VALUES (
    'Tal Avive',
    'Rabat',
    '2021-06-21',
    'oneway'
);

-- @BLOCK
INSERT INTO flight (
    origin,
    destination,
    date,
    type
)

VALUES (
    'qsfi',
    'sbqlion',
    '2021-08-21',
    'oneway'
);


-- @BLOCK
INSERT INTO flight (
    origin,
    destination,
    date,
    type
)

VALUES (
    'queens bridge',
    'cuba',
    '2021-06-21',
    'oneway'
);

-- @BLOCK
INSERT INTO flight (
    origin,
    destination,
    date,
    type
)

VALUES (
    'Egypt',
    'India',
    '2021-07-04',
    'round'
);


-- @BLOCK
INSERT INTO user (
    firstName,
    lastName,
    email,
    password,
    age
)

VALUES (
    'Abdelqader',
    'Bou3lam',
    'ex@ample.com',
    '123456',
    '54'
)

-- @BLOCK
INSERT INTO user (
    firstName,
    lastName,
    email,
    password,
    age
)

VALUES (
    'Ayoub',
    'Mabrouk',
    'wldlqahba@gmail.com',
    'drari_sghar',
    '25'
)

-- @BLOCK
INSERT INTO user (
    firstName,
    lastName,
    email,
    password,
    age
)

VALUES (
    'Jeffrey',
    'Epstien',
    'ped@phile.com',
    'children',
    '54'
)
-- @BLOCK
ALTER TABLE user 
    ADD email VARCHAR(25) NOT NULL,
    ADD password VARCHAR(25) NOT NULL




-- @BLOCK
DELETE FROM user WHERE id='1';

-- SQL statements for methods in models
-- @BLOCK
INSERT INTO reservation (
    user_id,
    flight_id
)

VALUES(
    '2',
    '2'
)

-- @BLOCK

SELECT * FROM reservation
    INNER JOIN user ON user.id = reservation.user_id
    INNER JOIN flight ON flight.id = reservation.flight_id;

-- @BLOCK

INSERT INTO reservation
INNER JOIN user ON user.id = reservation.user_id
INNER JOIN flight ON flight.id = reservation.flight_id;
-- @block
SELECT * FROM flight;

-- @BLOCK
ALTER TABLE reservation
ADD passengers INT NOT NULL 

-- @block
INSERT INTO passenger (
            user_id,
            reservation_id,
            fullName,
            age
        )
        
        VALUES(
            '1',
            '11',
            'Abdullatif Jamil',
            '74'

        )

-- @BLOCK
SELECT * FROM passenger
