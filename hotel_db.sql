-- Create the database
CREATE DATABASE IF NOT EXISTS hotel_db;
USE hotel_db;

-- Create the Rooms table
CREATE TABLE rooms (
    room_id INT AUTO_INCREMENT PRIMARY KEY,
    room_number VARCHAR(10) NOT NULL,
    type VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    status ENUM('Available','Booked') DEFAULT 'Available'
);

-- Insert sample rooms
INSERT INTO rooms (room_number, type, price, status) VALUES
('101', 'Single', 50.00, 'Available'),
('102', 'Double', 75.00, 'Booked'),
('103', 'Suite', 120.00, 'Available');

-- Create the Guests table
CREATE TABLE guests (
    guest_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone VARCHAR(15),
    email VARCHAR(100)
);

-- Insert sample guests
INSERT INTO guests (first_name, last_name, phone, email) VALUES
('John', 'Doe', '123456789', 'john@example.com'),
('Jane', 'Smith', '987654321', 'jane@example.com');

-- Create the Bookings table
CREATE TABLE bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    guest_id INT NOT NULL,
    room_id INT NOT NULL,
    check_in DATE NOT NULL,
    check_out DATE NOT NULL,
    FOREIGN KEY (guest_id) REFERENCES guests(guest_id),
    FOREIGN KEY (room_id) REFERENCES rooms(room_id)
);

-- Insert sample bookings
INSERT INTO bookings (guest_id, room_id, check_in, check_out) VALUES
(1, 2, '2025-08-15', '2025-08-20'),
(2, 3, '2025-08-18', '2025-08-25');
