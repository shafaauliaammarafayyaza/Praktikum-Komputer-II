
CREATE DATABASE IF NOT EXISTS inventory;
USE inventory;

CREATE TABLE IF NOT EXISTS barang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(10),
    nama_barang VARCHAR(100),
    merk VARCHAR(50),
    jumlah INT,
    satuan VARCHAR(20)
);

INSERT INTO barang (kode, nama_barang, merk, jumlah, satuan) VALUES
('B0001', 'TOSHIBA Satellite C800D-1003 - Black', 'TOSHIBA', 2, 'Unit'),
('B0002', 'TOSHIBA Satellite C40-A106 - Black', 'TOSHIBA', 3, 'Unit'),
('B0003', 'Printer Canon LBP 5100 Laser Jet', 'Canon', 2, 'Unit');
