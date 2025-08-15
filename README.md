# Latest Posts Plugin

Plugin WordPress sederhana untuk menampilkan daftar posting terbaru menggunakan shortcode `[latest_posts]`.

## 📌 Fitur
- Menampilkan posting terbaru (default 5 posting).
- Menggunakan shortcode `[latest_posts]` di halaman, posting, atau widget.
- Menampilkan **judul**, **tanggal**, dan **tautan** ke halaman detail.
- Opsi di dashboard untuk mengubah jumlah posting yang ditampilkan.
- Ditulis dengan pendekatan OOP (Object-Oriented Programming).

## 📂 Struktur Folder
wp-content/

└── plugins/

    └── latest-posts-plugin/
    
        ├── latest-posts-plugin.php
        
        └── class-latest-posts.php

## 🚀 Instalasi
1. Unduh atau clone repo ini:
   git clone https://github.com/username/latest-posts-plugin.git
2. Upload folder latest-posts-plugin ke:
   wp-content/plugins/
3. Masuk ke Dashboard → Plugins lalu aktifkan Latest Posts Plugin.
4. (Opsional) Atur jumlah posting di Settings → Latest Posts (default: 5).

## 💡 Cara Penggunaan
1️⃣ Shortcode di Halaman / Posting <br>
    [latest_posts]<br>
2️⃣ Widget Sidebar / Footer<br>
    Buka Appearance → Widgets → pilih Shortcode widget → masukkan: [latest_posts]<br>
3️⃣ Di File Template PHP<br>
    <?php echo do_shortcode('[latest_posts]'); ?>

## 📸 Tampilan Output
Contoh:
- Judul Post 1 — 14 Aug 2025
- Judul Post 2 — 13 Aug 2025
- Judul Post 3 — 12 Aug 2025
