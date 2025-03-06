# Dokumentasi API Laravel
Dokumentasi ini berisi daftar endpoint API yang tersedia dalam repository. API ini dibangun menggunakan Laravel dan menggunakan format REST API.

## Instalasi
1. Clone repository

`git clone https://github.com/rinooktavianridwan/Tugas1_backend.git`

2. Install dependensi menggunakan Composer:

`composer install`

3. Copy file .env.example menjadi .env dan sesuaikan konfigurasi database:

`cp .env.example .env`

4. Generate application key:

`php artisan key:generate`

5. Jalankan migrasi database:

`php artisan migrate --seed`

6. Jalankan server lokal:

`php artisan serve`

## Endpoint API

### 1. Toko

| **Aksi**                         | **Method** |   **Endpoint**            |
|----------------------------------|------------|---------------------------|
| **Mendapatkan daftar toko**      |   `GET`    |    `/tokos`               |
| **Mendapatkan daftar toko {ID}** |   `GET`    |    `/tokos/{id}`          |
|**Mendapatkan jumlah produk toko**|   `GET`    |    `/tokos/jumlahproduks` |
| **Menambahkan toko**             |   `POST`   |    `/tokos`               |
| **Mengupdate toko**              |   `PUT`    |    `/tokos/{id}`          |
| **Menghapus toko**               |   `DELETE` |    `/tokos/{id}`          |

Contoh Body untuk `PUT` dan `POST` :
```
{
    "nama_toko": "Toko Sumber Rezeki",
    "pemilik": "Siti Rohmah",
    "alamat": "Jl. Sudirman No. 50, Bandung",
    "email": "sumberrezeki@gmail.com",
    "no_telepon": "082345678901"
}
```

### 2. Produk

| **Aksi**                           | **Method** |   **Endpoint**            |
|------------------------------------|------------|---------------------------|
| **Mendapatkan daftar produk**      |   `GET`    |    `/produks`             |
| **Mendapatkan daftar produk {ID}** |   `GET`    |    `/produks/{id}`        |
| **Mendapatkan toko dari produk**   |   `GET`    |    `/produks/{id}/tokos`  |
| **Menambahkan produk**             |   `POST`   |    `/produks`             |
| **Mengupdate produk**              |   `PUT`    |    `/produks/{id}`        |
| **Menghapus produk**               |   `DELETE` |    `/produks/{id}`        |

Contoh Body untuk `PUT` dan `POST` :
```
{
    "toko_id": 1,
    "nama_produk": "Gula Aren",
    "harga": 5000,
    "stok": 50
  }
```
