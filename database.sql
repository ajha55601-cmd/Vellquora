CREATE DATABASE vellquora;
USE vellquora;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10,2),
    image VARCHAR(255)
);

INSERT INTO products(name, price, image)
VALUES
('Premium Shoes', 2999, 'https://images.unsplash.com/photo-1542291026-7eec264c27ff'),
('Smart Watch', 4999, 'https://images.unsplash.com/photo-1523275335684-37898b6baf30'),
('Headphones', 1999, 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e');