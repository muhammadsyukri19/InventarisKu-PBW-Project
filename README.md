# INVENTARISKU

## Informasi Pengembang
- Nama: Muhammad Syukri
- NPM: 2308107010060

## Deskripsi Aplikasi
### INVENTARISKU adalah aplikasi sistem informasi manajemen inventaris berbasis web yang dibangun menggunakan framework Laravel. Aplikasi ini dirancang untuk membantu pengguna dalam mengelola dan melacak inventaris barang dengan lebih efisien. Sistem ini dibuat untuk memenuhi mata kuliah Pemrograman Berbasis Website. 


## Fitur Utama
- Manajemen inventaris barang
- Pencatatan stok masuk dan keluar
- Laporan inventaris
- Manajemen pengguna
- Dashboard dengan statistik


## User Interface
### Aplikasi menggunakan Bootstrap untuk tampilan yang responsif dan modern. Interface utama terdiri dari:
- Dashboard dengan grafik dan statistik
- Halaman manajemen inventaris
- Form input data
- Tabel data dengan fitur pencarian dan filter
- Menu navigasi yang intuitif


## Teknologi yang Digunakan
- Laravel (PHP Framework)
- Bootstrap
- jQuery
- MySQL Database

## Persyaratan Sistem
- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL
- Web Server (Apache/Nginx)


## Cara Instalasi

1. Clone repository
```bash
git clone https://github.com/muhammadsyukri19/InventarisKu-PBW-Project.git
cd INVENTARISKU
```

2. Install dependencies PHP menggunakan Composer
```bash
composer install
```

3. Install dependencies JavaScript menggunakan NPM
```bash
npm install
```

4. Salin file .env.example menjadi .env
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Konfigurasi database di file .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventarisku
DB_USERNAME=root
DB_PASSWORD=
```

7. Jalankan migrasi database
```bash
php artisan migrate
```

8. Jalankan seeder untuk mendapatkan database admin
```bash
php artisan db:seed
```

9. Compile assets
```bash
npm run dev
```

10. Jalankan server development
```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

## Struktur Kode
- `app/` - Berisi logika utama aplikasi
- `config/` - File konfigurasi
- `database/` - Migrasi dan seeder database
- `public/` - Asset publik dan entry point
- `resources/` - View, asset mentah, dan bahasa
- `routes/` - Definisi route aplikasi
- `storage/` - File yang diupload dan cache
- `tests/` - Unit dan feature tests

