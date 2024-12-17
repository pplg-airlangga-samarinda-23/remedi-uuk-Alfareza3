CREATE DATABASE perpustakaan;

USE perpustakaan;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_buku VARCHAR(255) NOT NULL,
    penerbit VARCHAR(100) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    tahun_terbit INT NOT NULL
);
