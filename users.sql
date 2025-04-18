-- Table for all usernames and passwords
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (email, password) VALUES ('hanush@gmail.com', 'hanu8888');
INSERT INTO users (email, password) VALUES ('kusuma@gmail.com', 'kusuma8888');
INSERT INTO users (email, password) VALUES ('raghavendra@gmail.com', 'raghavendra8888');
INSERT INTO users (email, password) VALUES ('Manoj@gmail.com', 'manoj8888');
