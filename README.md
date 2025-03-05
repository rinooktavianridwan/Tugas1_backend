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
- Mendapatkan daftar toko

Endpoint semua: GET /tokos

Endpoint id: GET /tokos/{id}

- Mendapatkan daftar dan jumlah produk

Endpoint : GET /tokos/jumlahproduks

- Menambahkan toko

Endpoint: POST /tokos

Contoh Body : 
```
{
    "nama_toko": "Toko Sumber Rezeki",
    "pemilik": "Siti Rohmah",
    "alamat": "Jl. Sudirman No. 45, Bandung",
    "email": "sumberrezeki@gmail.com",
    "no_telepon": "082345678901"
}
```

- Mengupdate toko

Endpoint: PUT /tokos/{id}

Contoh Body :
```
{
    "nama_toko": "Toko Sumber Rezeki",
    "pemilik": "Siti Rohmah",
    "alamat": "Jl. Sudirman No. 50, Bandung",
    "email": "sumberrezeki@gmail.com",
    "no_telepon": "082345678901"
}
```

- Menghapus toko

Endpoint : DELETE /tokos/{id}

### 2. Produk
- Mendapatkan daftar produk
  
Endpoint semua: GET /produks

Endpoint id: GET /produks/{id}

- Menambahkan produk

Endpoint: POST /produks

Contoh Body : 
```
{
    "toko_id": 1,
    "nama_produk": "Gula Aren",
    "harga": 5000,
    "stok": 50
  }
```

- Mengupdate produk

Endpoint: PUT /produks/{id}

Contoh Body :
```
{
    "toko_id": 1,
    "nama_produk": "Gula Aren",
    "harga": 5000,
    "stok": 50
  }
```

- Menghapus produk

Endpoint : DELETE /produks/{id}


