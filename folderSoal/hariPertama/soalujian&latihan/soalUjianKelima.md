# Soal Latihan CSS & HTML
**Total Skor Maksimal: 100 poin**

## Materi yang Diuji:
- CSS: display, position, z-index, overflow, float
- HTML: div, span, class, id, form

---

## Bagian A - Teori Singkat (20 poin)

1. (5 poin) Jelaskan perbedaan `display: inline;` dan `display: block;` dalam CSS.
jawab:
"display: inline" digunakan untuk merubah beberapa kode dalam satu baris menyamping
sedangkan "display: block" digunakan untuk merubah beberapa kode dalam satu baris kebawah
2. (5 poin) Apa fungsi properti `z-index`?
jawab:
untuk menandai atau memprioritaskan suatu kode dalam beberapa tumpuk kode
3. (5 poin) Sebutkan minimal 2 contoh nilai dari properti `position` dan jelaskan singkat masing-masing.
jawab:
"position: relative" digunakan untuk menumpuk beberapa kode dalam kode yang lebih besar dengan rapi
"position: absolute" digunakan untuk menumpuk beberapa kode dalam kode yang lebih besar dengan acak
4. (5 poin) Apa perbedaan penggunaan tag `<div>` dan `<span>` dalam HTML?
jawab:
"<div>"digunakan untuk membuat properti class
"<span>"digunakan untuk memisahkan beberapa kata yang berguna saat menentukan "display"

---

## Bagian B - Praktek HTML & CSS (80 poin)

### Praktek 1: Struktur Dasar (10 poin)
Buat struktur HTML seperti berikut:

- `<div>` utama dengan `id="container"`
- Di dalamnya terdapat:
  - `<div class="kotak">` dengan teks "Kotak 1"
  - `<div class="kotak">` dengan teks "Kotak 2"
  - `<span class="teks-kecil">` dengan teks "Ini teks kecil"
  jawab:
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div class=container>
    <div class="kotak1"></div>
    <div class="kotak2"></div>
  </div>
  <p class=kotak1>kotak1</p>
  <p class=kotak2>kotak2</p>
  <p class=teks-kecil>ini teks kecil</p>
</body>
</html>

**Instruksi:**
- Pastikan semua elemen tampil di browser.
- Jangan gunakan CSS dulu, cukup struktur HTML-nya.

---

### Praktek 2: Display & Float (15 poin)
Gunakan CSS untuk:

- Semua elemen `.kotak` diberi:
  - Ukuran: 150px x 150px
  - Warna latar: biru muda
  - Tampilkan sejajar ke kanan menggunakan `float`
- Elemen `.teks-kecil` diberi `display: inline-block` dan warna teks merah.
jawab:
    <link rel="stylesheet" href="style.css">
    .kotak {
      width: 150px;
      heigh: 150px;
      background-color: lightblue;
      float: right;
    }

    .teks-kecil {
      display: inline-block;
      color: red;
    }


---

### Praktek 3: Position & Z-Index (20 poin)
- Tambahkan satu `<div class="kotak-atas">` di dalam `#container`
- CSS untuk `.kotak-atas`:
  - Ukuran: 100px x 100px
  - Warna latar: merah muda
  - Posisi: `absolute`
  - Tempatkan di pojok kanan atas
  - Beri `z-index` lebih tinggi dari `.kotak` agar menutupi kotak lain jika tumpang tindih
  jawab:
  `~`

---

### Praktek 4: Overflow (10 poin)
- Buat `<div class="wadah-overflow">` berukuran 200px x 100px 
dengan warna latar abu-abu
- Di dalamnya isi teks panjang sehingga melebihi ukuran wadah
- Atur `overflow` supaya muncul scrollbar jika isi melebihi wadah

---

### Praktek 5: HTML Form (25 poin)
Buat form sederhana:

```html
<form id="form-daftar">
  <label>Nama:</label>
  <input type="text" id="nama" class="input-form">
  <label>Email:</label>
  <input type="email" id="email" class="input-form">
  <button type="submit">Kirim</button>
</form>
```

**Instruksi:**
- Semua input beri class `.input-form`
- Tata letak rapi pakai CSS:
  - `display: block` untuk input
  - Jarak antar elemen 10px
  - Form ada di tengah halaman, gunakan teknik CSS sesuai kebutuhan

---

## Pembagian Skor Detail

| Bagian                          | Skor Maksimal |
|---------------------------------|----------------|
| Teori                           | 20 poin        |
| Praktek 1 (Struktur HTML)       | 10 poin        |
| Praktek 2 (Display & Float)     | 15 poin        |
| Praktek 3 (Position & Z-Index)  | 20 poin        |
| Praktek 4 (Overflow)            | 10 poin        |
| Praktek 5 (HTML Form)           | 25 poin        |
| **Total**                       | **100 poin**   |
