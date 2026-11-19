# LAPORAN PRAKTIKUM 8
## PHP DAN DATABASE MYSQL
**Identitas Praktikum**

- Mata Kuliah: Pemrograman Web OBE
- Nama : Maulana akbar
- NIM : 312510381
- Praktikum: 8
- Materi: PHP dan Database MySQL
- Repository: Lab8Web

### Deskripsi Praktikum
Praktikum ini membahas pembuatan aplikasi CRUD (Create, Read, Update, Delete) menggunakan PHP dan database MySQL. Aplikasi yang dibuat merupakan sistem pengelolaan data barang yang memungkinkan pengguna untuk menampilkan, menambahkan, mengubah, dan menghapus data.

---

## 1. Persiapan XAMPP

Pada tahap pertama dilakukan persiapan lingkungan kerja dengan menjalankan Apache dan MySQL melalui XAMPP Control Panel. Apache digunakan untuk menjalankan program PHP, sedangkan MySQL digunakan sebagai pengelola database.

**Hasil Praktikum:**

<img width="672" height="433" alt="image" src="https://github.com/user-attachments/assets/ce7a569c-b9eb-4b31-a571-5f74241e4753" />


---

## 2. Mengakses phpMyAdmin

Setelah Apache dan MySQL berhasil dijalankan, phpMyAdmin dibuka melalui browser dengan alamat `http://localhost/phpmyadmin/`. phpMyAdmin digunakan untuk mengelola database MySQL melalui tampilan antarmuka.

**Hasil Praktikum:**

<img width="1521" height="772" alt="Screenshot 2026-11-19 085409" src="https://github.com/user-attachments/assets/b36e9bec-2773-492a-8841-ab61a19326b2" />


---

## 3. Membuat Database

Membuat database baru dengan nama `latihan1` menggunakan perintah SQL `CREATE DATABASE`. Database ini digunakan sebagai tempat penyimpanan seluruh data barang pada aplikasi.

Perintah yang digunakan:

```sql
CREATE DATABASE latihan1;
```

**Hasil Praktikum:**

<img width="1288" height="178" alt="Screenshot 2026-11-19 082819" src="https://github.com/user-attachments/assets/740541b6-c850-4fd9-97cd-155cf70095fa" />

---

## 4. Membuat Tabel data_barang

Setelah database berhasil dibuat, langkah selanjutnya adalah membuat tabel `data_barang`. Tabel ini memiliki tujuh field, yaitu `id_barang`, `kategori`, `nama`, `gambar`, `harga_beli`, `harga_jual`, dan `stok`.

Field `id_barang` digunakan sebagai Primary Key dan menggunakan Auto Increment agar nomor identitas barang bertambah secara otomatis.

**Hasil Praktikum:**

<img width="626" height="197" alt="Screenshot 2026-11-19 085148" src="https://github.com/user-attachments/assets/eb66fe78-d905-47e0-9dba-79a0b4d1c5cd" />


---

## 5. Menambahkan Data Awal

Memasukkan tiga data barang ke dalam tabel `data_barang` menggunakan perintah `INSERT INTO`. Data yang dimasukkan terdiri dari HP Samsung Android, HP Xiaomi Android, dan HP OPPO Android beserta informasi kategori, gambar, harga beli, harga jual, dan stok.

**Hasil Praktikum:**

<img width="1530" height="823" alt="Screenshot 2026-11-19 085344" src="https://github.com/user-attachments/assets/901c311f-e781-4cfd-989d-6ff6103c4818" />


---

## 6. Membuat Folder Project

Membuat folder project dengan nama `lab8_php_database` di dalam direktori `htdocs` XAMPP. Folder ini digunakan untuk menyimpan seluruh file yang dibutuhkan dalam pembuatan aplikasi CRUD.

Project dapat diakses melalui browser dengan alamat:

`http://localhost/lab8_php_database/`

**Hasil Praktikum:**

<img width="1087" height="681" alt="image" src="https://github.com/user-attachments/assets/e4b56b93-75ba-48d0-8a9c-8624d947ffcf" />


---

## 7. Membuat Koneksi Database (koneksi.php)

Membuat file `koneksi.php` untuk menghubungkan program PHP dengan database MySQL. Pada file ini ditentukan konfigurasi berupa host, username, password, dan nama database.

Fungsi `mysqli_connect()` digunakan untuk membuat koneksi, sedangkan variabel `$conn` digunakan untuk menyimpan hasil koneksi agar dapat digunakan oleh file PHP lainnya.

**Hasil Praktikum:**

<img width="313" height="213" alt="Screenshot 2026-11-19 090959" src="https://github.com/user-attachments/assets/d34e71f2-7091-430b-9029-00642cd20b88" />


---

## 8. Menampilkan Data Barang (READ)

Membuat file `index.php` untuk menampilkan seluruh data barang yang tersimpan di dalam database.

Pada tahap ini digunakan perintah SQL `SELECT` untuk mengambil data, `mysqli_query()` untuk menjalankan perintah SQL, serta `mysqli_fetch_array()` untuk mengambil data satu per satu. Data kemudian ditampilkan dalam bentuk tabel HTML.

**Hasil Praktikum:**

<img width="675" height="181" alt="Screenshot 2026-11-19 093054" src="https://github.com/user-attachments/assets/7e55ec6f-0754-417c-a885-cf7a2d9e5212" />


---

## 9. Menambahkan Data Barang (CREATE)

Membuat file `tambah.php` sebagai halaman untuk memasukkan data barang baru ke dalam database melalui formulir HTML.

Formulir berisi nama barang, kategori, harga jual, harga beli, stok, dan file gambar. Data dikirim menggunakan metode POST, sedangkan file gambar diproses menggunakan `$_FILES` dan `move_uploaded_file()`.

Perintah SQL `INSERT INTO` digunakan untuk menyimpan data baru ke dalam tabel `data_barang`.

**Hasil Praktikum:**

<img width="542" height="262" alt="image" src="https://github.com/user-attachments/assets/bf464283-e279-4a15-908b-4da45573a9d7" />


<img width="653" height="263" alt="image" src="https://github.com/user-attachments/assets/2a2dedd9-1f17-47df-9c9d-a53a682cdd53" />

---

## 10. Mengubah Data Barang (UPDATE)

Membuat file `ubah.php` untuk mengubah informasi barang yang sudah tersimpan dalam database.

Data barang diambil berdasarkan `id_barang` menggunakan parameter GET. Informasi yang diperoleh kemudian ditampilkan kembali ke dalam formulir agar pengguna dapat melakukan perubahan.

Perintah SQL `UPDATE` digunakan untuk memperbarui data berdasarkan ID barang yang dipilih.

**Hasil Praktikum:**

<img width="412" height="298" alt="Screenshot 2026-11-19 100342" src="https://github.com/user-attachments/assets/cd01a327-6003-4bb9-9a08-3b46533daeee" />


<img width="692" height="202" alt="Screenshot 2026-11-19 100333" src="https://github.com/user-attachments/assets/e2e4727f-4e09-4e03-8d49-5770afbe746c" />


---

## 11. Menghapus Data Barang (DELETE)

Membuat file `hapus.php` untuk menghapus data barang berdasarkan ID yang dipilih.

Parameter GET digunakan untuk mengambil ID barang dari URL. Selanjutnya, perintah SQL `DELETE FROM` digunakan untuk menghapus data dari tabel `data_barang` berdasarkan ID tersebut.

Setelah proses penghapusan dilakukan, pengguna diarahkan kembali ke halaman utama.

**Hasil Praktikum:**

<img width="606" height="33" alt="image" src="https://github.com/user-attachments/assets/6eead747-32cb-475a-86ab-aa916a6682a4" />

<img width="757" height="202" alt="Screenshot 2026-11-19 102803" src="https://github.com/user-attachments/assets/b31db76b-e230-4a56-aa6e-3fe6335a3969" />


---

## 12. Kesimpulan

Berdasarkan praktikum yang telah dilakukan, dapat dipahami bahwa PHP dapat digunakan untuk menghubungkan dan mengelola data pada database MySQL. Melalui konsep CRUD, pengguna dapat melakukan proses penambahan, pembacaan, perubahan, dan penghapusan data melalui aplikasi berbasis web.

Praktikum ini juga memberikan pemahaman mengenai penggunaan koneksi database, perintah SQL, pengolahan data formulir, serta penerapan PHP dalam pembuatan aplikasi sederhana.

---

