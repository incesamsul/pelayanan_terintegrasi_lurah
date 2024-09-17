Petunjuk penginsatalan

sebelum di jalankan install aplikasi berikut terlebih dahulu
Xampp (php 8.0)
Composer
Visual studio code
git (optional)
- Setelah itu download repo github diatas

- buat database dengan nama sesuai repo

- extrak hasil download di manapun

- buka hasil extrak di vscode

- duplikat vile .env.example lalu rename ke .env

- buka hasil ekstrak di cmd / terminal lalu jalankan php artisan key:generate

- lalu jalankan perintah php artisan migrate:fresh --seed

- lalu terakhir jalankan perintah php artisan serve

- buka browser dan akses halaman http://127.0.0.1:8000
