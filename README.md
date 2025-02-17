## Langkah-langkah Instalasi ##

1. extract atau git clone file
2. Jalankan `cp .env.example .env`, lalu Masukkan Konfigurasi Database**
    - Salin file `.env.example` menjadi `.env`.
    - Buka file `.env` dan masukkan informasi konfigurasi database Anda.

3. Jalankan `composer update`
    - Jalankan perintah `composer update` untuk menginstal semua dependensi yang diperlukan.

4. Jalankan `php artisan key:generate`
    - Jalankan perintah `php artisan key:generate` untuk menghasilkan kunci aplikasi.

5. Jalankan `php artisan migrate`
    - Jalankan perintah `php artisan migrate` untuk membuat tabel-tabel di database.

6. Jalankan `php artisan make:filament-user`, lalu Masukkan Informasi User
    - Jalankan perintah `php artisan make:filament-user` dan masukkan informasi pengguna yang diminta.
    (untuk mengaktifkan user Super Admin)
7. Setelah membuat filament user ikuti langkah install fillament sebagai berikut :
    - install library :  composer require bezhansalleh/filament-shield
    - php artisan shield:setup
    - php artisan shield:install (jika muncul permintaan admin, ketik admin untuk melanjutkan pembuatan role)
    - php artisan shield:generate --all (untuk generate policy dari semua model) -> ini yang sering lupa, menyebabkan menu2 nya ilang
    - php artisan shield:super-admin (untuk assign role super_admin ke user tertentu -> masukkan email super user yang telah dibuat sebelumnya)

8. Jalankan `php artisan serve`
    - Jalankan perintah `php artisan serve`.
    - Buka browser dan akses `http://127.0.0.1:8000/`.

9. Jangan Lupa Jalankan `php artisan icons:cache` untuk meringankan browser saat membuka web filament
10. Jalankan `php artisan storage:link` untuk menyimpan data foto di server
