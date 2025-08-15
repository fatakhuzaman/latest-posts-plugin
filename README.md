# Latest Posts Plugin

Plugin WordPress sederhana untuk menampilkan daftar posting terbaru menggunakan shortcode `[latest_posts]`.

## 📌 Fitur
- Menampilkan posting terbaru (default 5 posting).
- Menggunakan shortcode `[latest_posts]` di halaman, posting, atau widget.
- Menampilkan **judul**, **tanggal**, dan **tautan** ke halaman detail.
- Opsi di dashboard untuk mengubah jumlah posting yang ditampilkan.
- Ditulis dengan pendekatan OOP (Object-Oriented Programming).

## 📂 Struktur Folder
wp-content/<br>
└── plugins/<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└── latest-posts-plugin/<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├── latest-posts-plugin.php<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└── class-latest-posts.php<br>

## 🚀 Instalasi
1. Unduh atau clone repo ini:<br>
git clone https://github.com/username/latest-posts-plugin.git
2. Upload folder latest-posts-plugin ke:<br>
wp-content/plugins/
4. Masuk ke Dashboard → Plugins lalu aktifkan Latest Posts Plugin.
5. (Opsional) Atur jumlah posting di Settings → Latest Posts (default: 5).

## 💡 Cara Penggunaan
1️⃣ Shortcode di Halaman / Posting <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[latest_posts]<br>
2️⃣ Widget Sidebar / Footer<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buka Appearance → Widgets → pilih Shortcode widget → masukkan: [latest_posts]<br>
3️⃣ Di File Template PHP

    <?php echo do_shortcode('[latest_posts]'); ?>

## 📸 Tampilan Output
Contoh:
- Judul Post 1 — 14 Aug 2025
- Judul Post 2 — 13 Aug 2025
- Judul Post 3 — 12 Aug 2025
