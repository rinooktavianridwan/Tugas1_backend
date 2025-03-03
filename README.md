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

### 1. Produk
- Mendapatkan daftar produk
Endpoint: GET /api/produks


