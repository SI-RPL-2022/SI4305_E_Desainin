<p align="center"><img src="https://drive.google.com/uc?export=view&id=1gD2UIPCHYRg1DcKnwRyyZJVssHo51u8r" width="400"></p>

## Capstone Project: Desainin Website Application

Hai, semua! Perkenalkan kami dari Kelompok E kelas SI-43-05. Kelompok E terdiri dari:

- Ahmad Fachrulroji | github: <a href="https://github.com/IDKuroNeko"><b>IDKuroNeko</b></a>
- Aulia Basyirah | github: <a href="https://github.com/auliab51"><b>auliab51</b></a>
- Muhammad Rifqi Setiawan | github: <a href="https://github.com/rifqisetiawann"><b>rifqisetiawann</b></a>
- Naufal Aqil Himawan | github: <a href="https://github.com/naufal-aqil"><b>naufal-aqil</b></a>
- Raden Khalid Jati Junjunan Septian Budy Putra	| github: <a href="https://github.com/jatijunanptr"><b>jatijunanptr</b></a>

Pada _project_ ini, tim kami membuat sebuah _website_ untuk para desainer yang ingin mengunggah hasil karya mereka ke dalam sebuah forum dan mendapat berbagai macam _feedback_ dari orang lain. Apa anda tidak asing dengan _Pinterest_? _Github_ (Tentu saja tidak asing, kan? Haha!)? _Website_ kami memiliki fitur serupa terhadap _website_ yang sudah disebutkan sebelumnya. Pengguna sebagai desainer dapat mengunggah hasil karyanya ke _website_ kami, lalu pengguna lain dapat mengirimkan _feedback_ terhadap karya tersebut dalam bentuk komentar yang bisa dilihat oleh siapa saja layaknya forum diskusi.

Berikut kami persembahkan, <b>Desainin Website Application</b>

## Framework

<a href="https://laravel.com"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a><br>
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>

Laravel menjadi _framework_ yang kami gunakan untuk membangun website ini.

## Introduction to Desainin

_Our platform engaged many designers in many places from Indonesia that hire their abilities in the field of design services. Our platform also helps to simplify many vendors or other customers who need design services._

## How to Use

Bagi kalian yang ingin menggunakan aplikasi ini, silakan ikuti langkah-langkah di bawah ini.

1. Lakukan _clone_ terhadap repository ini. Ketikkan perintah ```git clone https://github.com/SI-RPL-2022/SI4305_E_Desainin.git``` melalui _terminal/bash_ pada _folder_ yang sudah kalian siapkan untuk _project_ ini
2. Buka _project_ ini melalui _text editor_ yang kalian punya (bisa gunakan Visual Studio Code), lalu buka _terminal_ baru untuk _project_ ini
3. Ketikkan perintah ```composer install``` pada _terminal_, lalu tunggu proses instalasi/pembaruan berhasil dijalankan
4. Salin _file_ ```.env.example``` yang ada pada _project_ tersebut dan tempelkan juga pada _project_ tersebut, lalu ubah/_rename_ _file_ tersebut menjadi ```.env```
5. Sesuaikan nama _database_ pada _file_ ```.env``` dengan nama _database_ yang sudah/ingin kalian buat
6. Pada ```.env```, ubah ```FILESYSTEM_DISK=local``` menjadi ```FILESYSTEM_DISK=public```<br><img src="https://drive.google.com/uc?export=view&id=1eGG4Pilzmj_0qeKDUl5EZUSM0g58Xpc2">
7. Ketikkan perintah ```php artisan storage:link``` pada _terminal_ untuk menghubungkan penyimpanan pribadi dengan penyimpanan publik (konfigurasi _folder_ untuk mengunggah gambar pada _website_)
8. Ketikkan perintah ```php artisan key:generate``` pada _terminal_ untuk meng-_generate_ _key_
9. Ketikkan perintah ```php artisan migrate:fresh --seed``` pada _terminal_ untuk melakukan migrasi _database_ sekaligus menambahkan _seed_ (berisi data akun admin) untuk _database_
10. Ketikkan perintah ```php artisan serve``` pada _terminal_ untuk menjalankan _localhost_ pada perangkat masing-masing (pastikan XAMPP sudah dalam keadaan menyala pada Apache dan MySQL)
11. Silakan akses _localhost_-nya dan selamat menggunakan aplikasi Desainin :)

***NOTE***

- Akun _admin_
<br>email: admin@desainin.com
<br>password: admin
- Beberapa fitur masih belum tersedia seperti laman _About us_ dan _Contact us_
- Untuk mengganti profil seperti _username_ dan _phone_ _number_, silakan inputkan _password_ terlebih dahulu (bisa menginputkan _password_ lama (_password_ yang digunakan untuk _login_) maupun _password_ baru jika _ingin_ mengganti _password_)
- Untuk mengubah _banner_ pada laman _homepage_ _user_, silakan masuk sebagai _admin_ dan pilih _Announcer_ pada _Dashboard_. Gambar yang disarankan untuk diunggah adalah gambar dengan aspek rasio 2.39 agar ukuran gambar pada laman homepage _user_ menjadi maksimal (tidak menjadi _stretched_)

## Closing

Terima kasih sudah menggunakan aplikasi kami!

_Project_ ini dibuat untuk memenuhi tugas besar mata kuliah Rekayasa Perangkat Lunak.

<!-- <p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->
