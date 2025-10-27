CREATE DATABASE converter_db;
USE converter_db;

CREATE TABLE conversions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(50),   -- e.g., length, weight, temperature
    unit_from VARCHAR(50),
    unit_to VARCHAR(50),
    factor DOUBLE
);

-- Sample data (length)
INSERT INTO conversions (category, unit_from, unit_to, factor)
VALUES
('length', 'meter', 'centimeter', 100),
('length', 'centimeter', 'meter', 0.01),
('length', 'kilometer', 'meter', 1000),
('length', 'meter', 'kilometer', 0.001);

-- Sample data (weight)
INSERT INTO conversions (category, unit_from, unit_to, factor)
VALUES
('weight', 'kilogram', 'gram', 1000),
('weight', 'gram', 'kilogram', 0.001);
