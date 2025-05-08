    -- Create the database 
    CREATE DATABASE IF NOT EXISTS findmystuff_db;
    
    -- Select the database to use
    USE findmystuff_db;
    
    -- Create the table to store lost and found items
    CREATE TABLE IF NOT EXISTS items (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT NOT NULL,
        location VARCHAR(255) NOT NULL,
        image_url VARCHAR(255),  -- Store the URL of the image
        date_posted TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    