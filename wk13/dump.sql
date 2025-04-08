-- Dump of your database structure and data
-- Create table
CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    active INT NOT NULL,
    PRIMARY KEY (id)
);

-- Insert data
INSERT INTO users (username, email, firstname, lastname, active) VALUES
('user1', 'user1@example.com', 'Ben', 'Smith', 1),
('user2', 'user2@example.com', 'Alice', 'Johnson', 1),
('user3', 'user3@example.com', 'Charlie', 'Brown', 1),
('user4', 'user4@example.com', 'David', 'Williams', 1),
('user5', 'user5@example.com', 'Eve', 'Davis', 1);

-- Insert additional user with firstname 'Ben' and active = 0
INSERT INTO users (username, email, firstname, lastname, active) VALUES
('user6', 'user6@example.com', 'Ben', 'Taylor', 0);
