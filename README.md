# Simple CRUD dengan CodeIgniter 4

## Deskripsi

Project ini adalah implementasi sederhana dari fitur CRUD (Create, Read, Update, Delete) menggunakan CodeIgniter 4. CRUD adalah operasi dasar dalam pengelolaan data pada aplikasi web.

## Fitur

- **Read**: Menampilkan daftar data dari database.
- **Create**: Menambahkan data baru ke database.
- **Update**: Mengedit data yang sudah ada di database.
- **Delete**: Menghapus data dari database.

## Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/Bisbiss/crud_ci.git
cd crud_ci
```

### 2. Install Dependencies

Pastikan sudah menginstal Composer, lalu jalankan perintah berikut:

```bash
composer install
```

### 3. Konfigurasi Database

- Buat database di MySQL atau database lain yang didukung.
- Ubah konfigurasi database di file `.env`:

```ini
database.default.hostname = localhost
database.default.database = (nama_database_mu)
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

- Buat tabel dalam database yang kamu buat (users) dengan kolom ('id','name', 'email', 'phone')

```bash
php spark migrate
```

### 4. Menjalankan Aplikasi

```bash
php spark serve
```

Akses aplikasi di browser dengan alamat `http://localhost:8080`.

## Dokumentasi Tampilan

### Read Data

![image](https://github.com/Bisbiss/crud_ci/blob/main/public/dokumentasi/list.png)

### Add Data

![image](https://github.com/Bisbiss/crud_ci/blob/main/public/dokumentasi/tambah.png)

### Update Data

![image](https://github.com/Bisbiss/crud_ci/blob/main/public/dokumentasi/ubah.png)

## Struktur Folder

```
crud_ci/
│── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
│── public/
│── writable/
│── .env
│── composer.json
│── spark
```

## Teknologi yang Digunakan

- CodeIgniter 4
- PHP 8+
- MySQL
- Tailwind (untuk tampilan UI sederhana)

## Kontribusi

Pull request sangat diterima! Untuk perubahan besar, silakan buka issue terlebih dahulu untuk mendiskusikan apa yang ingin Anda ubah.

## Lisensi

Project ini menggunakan lisensi [MIT](LICENSE).
