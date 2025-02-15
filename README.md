# Dewakoding Presensi
## Langkah-langkah Instalasi

1. **Extract File Zip**
    - Download file zip dari sumber yang disediakan.
    - Extract file zip ke dalam direktori proyek Anda.

2. **Buka File Zip dengan Text Editor**
    - Gunakan text editor pilihan Anda (contoh: VSCode, Sublime Text, atau Notepad++).
    - Buka direktori proyek yang telah diextract.

3. **Siapkan Database**
    - Buat database baru di server database Anda (contoh: MySQL, PostgreSQL, atau SQLite).

4. **Jalankan `cp .env.example .env`, lalu Masukkan Konfigurasi Database**
    - Salin file `.env.example` menjadi `.env`.
    - Buka file `.env` dan masukkan informasi konfigurasi database Anda.

5. **Jalankan `composer update`**
    - Jalankan perintah `composer update` untuk menginstal semua dependensi yang diperlukan.

6. **Jalankan `php artisan key:generate`**
    - Jalankan perintah `php artisan key:generate` untuk menghasilkan kunci aplikasi.

7. **Jalankan `php artisan migrate`**
    - Jalankan perintah `php artisan migrate` untuk membuat tabel-tabel di database.

8. **Jalankan `php artisan make:filament-user`, lalu Masukkan Informasi User**
    - Jalankan perintah `php artisan make:filament-user` dan masukkan informasi pengguna yang diminta.

9. **Jalankan `php artisan serve`, Buka Web di URL `/admin`**
    - Jalankan perintah `php artisan serve`.
    - Buka browser dan akses `http://localhost:8000/admin`.

10. **Project Siap Digunakan**
    - Proyek Laravel Anda sekarang siap digunakan.

Project siap digunakan
