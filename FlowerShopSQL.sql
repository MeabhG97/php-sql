DROP DATABASE IF EXISTS flower_shop;
CREATE DATABASE flower_shop;

USE flower_shop;

CREATE TABLE Flowers (
    flower_id INT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    color VARCHAR(20) NOT NULL,
    price_per_stem DECIMAL(5, 2) NOT NULL
);

CREATE TABLE Flower_Arrangements (
    arrangement_id INT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description TEXT
);

CREATE TABLE Arrangement_Flowers (
    arrangement_id INT,
    flower_id INT,
    stem_count INT,
    PRIMARY KEY (arrangement_id, flower_id),
    FOREIGN KEY (arrangement_id) REFERENCES Flower_Arrangements(arrangement_id),
    FOREIGN KEY (flower_id) REFERENCES Flowers(flower_id)
);

-- Insert data into Flowers table
INSERT INTO Flowers (flower_id, name, color, price_per_stem)
VALUES 
    (1, 'Rose', 'Red', 1.50),
    (2, 'Lily', 'White', 2.00),
    (3, 'Daisy', 'Yellow', 0.75),
    (4, 'Tulip', 'Pink', 1.00),
    (5, 'Sunflower', 'Yellow', 1.25);

-- Insert data into Flower_Arrangements table
INSERT INTO Flower_Arrangements (arrangement_id, name, description)
VALUES 
    (1, 'Spring Bouquet', 'A colorful arrangement of spring flowers'),
    (2, 'Classic Rose Bouquet', 'A dozen red roses arranged in a classic bouquet'),
    (3, 'Wedding Bouquet', 'A beautiful bouquet of white lilies and roses'),
    (4, 'Garden Bouquet', 'A mix of brightly colored flowers in a garden style');

-- Insert data into Arrangement_Flowers table
INSERT INTO Arrangement_Flowers (arrangement_id, flower_id, stem_count)
VALUES 
    (1, 2, 5),
    (1, 3, 10),
    (1, 4, 7),
    (2, 1, 12),
    (3, 1, 8),
    (3, 2, 6),
    (3, 3, 10),
    (4, 2, 3),
    (4, 3, 6),
    (4, 5, 5);
