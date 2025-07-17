# appkasir

**appkasir** adalah aplikasi berbasis web yang dikembangkan menggunakan PHP dan MySQL untuk membantu proses transaksi di restoran atau rumah makan. Aplikasi ini dirancang untuk mempermudah pencatatan pesanan, pengelolaan menu, transaksi pembayaran, dan laporan penjualan.

---

## 📌 Fitur Utama

- 🔐 **Login & Registrasi**
  - Halaman login untuk admin dan user (`cek_login.php`)
  - Registrasi akun pengguna baru (`registrasi.php`, `register.php`, `registrasi_user.php`)

- 🍽️ **Manajemen Menu**
  - Tambah, ubah, dan hapus data makanan dan minuman (`tambahMakanan.php`, `ubahMakanan.php`, `data_makanan.php`, `data_minuman.php`)

- 🧑‍💼 **Manajemen User**
  - Pengelolaan data user (`data_user.php`, `ubahUser.php`, `ubah_user.php`)

- 📦 **Manajemen Order**
  - Input dan proses order pelanggan (`orderMakanan.php`, `tambahOrder.php`, `data_order.php`, `tambah_makanan.php`, `tambah_order.php`)

- 💵 **Transaksi & Pembayaran**
  - Proses transaksi dan cetak struk (`prosesTransaksi.php`, `transaksi.php`, `print_struk.php`)
  - Penghitungan kembalian dan total harga (`rupiah.php`)

- 📊 **Laporan**
  - Menampilkan semua laporan transaksi dan penjualan (`semua_laporan.php`)

- 🖥️ **Dashboard**
  - Dashboard informasi utama setelah login (`dashboard.php`)

---

## 🛠️ Teknologi yang Digunakan

- **Frontend**: HTML, CSS (via template bawaan atau manual)
- **Backend**: PHP
- **Database**: MySQL (struktur tersedia di `db_restoran.sql`)
- **Server lokal**: XAMPP (Apache, MySQL)

---

## 🧾 Cara Menjalankan

1. Clone repo ini:
   ```bash
   git clone https://github.com/riyannur22/appkasir.git
