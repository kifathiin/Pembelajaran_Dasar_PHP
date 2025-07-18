
# 📝 Soal Latihan HTML Dasar - Level Menengah

**Materi:**  
- Struktur Dokumen HTML  
- Tag, Elemen, Atribut, Komentar  
- Teks: Heading, Paragraf, Text Formatting  
- Gambar (Image)  
- Hyperlink (Link)  
- Table Dasar (tr, td)  

**Total Skor Maksimal: 100 poin**  

---

## Bagian A: Pilihan Ganda (5 Soal × 6 poin = 30 poin)  

**1.** Perhatikan kode berikut:  
```html
<!DOCTYPE html>
<html>
<head>
<title>Latihan</title>
</head>
<body>
<h1>Belajar HTML</h1>
<p>Halo Dunia!</p>
</body>
</html>
```
Bagian kode `<h1>Belajar HTML</h1>` disebut sebagai... *(6 poin)*  
a. Tag saja  
b. Elemen lengkap  
c. Hanya isi konten  
d. Hanya atribut  

jawab : B

---

**2.** Tag heading yang memiliki ukuran teks **paling kecil** adalah... *(6 poin)*  
a. `<h1>`  
b. `<h3>`  
c. `<h6>`  
d. `<h7>`  

jawab : D

---

**3.** Manakah penulisan tag `<a>` berikut ini yang **benar dan lengkap**? *(6 poin)*  
a. `<a>https://google.com</a>`  
b. `<a href="https://google.com">Google</a>`  
c. `<a link="https://google.com">Google</a>`  
d. `<a href="Google">https://google.com</a>` 

jawab : B

---

**4.** Di bawah ini adalah contoh **komentar ganda** dalam HTML yang benar: *(6 poin)*  
a. `<!-- Ini Komentar --!> <!-- Komentar lagi -->`  
b. `// Ini komentar 1 // Ini komentar 2`  
c. `<!-- Ini Komentar --> <!-- Komentar lagi -->`  
d. `/* Komentar 1 */ /* Komentar 2 */`

jawab : C

---

**5.** Tag `<img>` termasuk kategori tag... *(6 poin)*  
a. Harus selalu ditutup dengan `</img>`  
b. Self-closing (boleh ditutup dengan `/>`)  
c. Tidak perlu atribut apapun  
d. Tidak bisa digunakan dalam `<body>`  

jawab : B

---

## Bagian B: Isian Singkat (5 Soal × 6 poin = 30 poin)  

**6.** Tulis contoh paragraf dengan teks "Halo Dunia" yang diberi atribut untuk merubah warnanya menjadi biru menggunakan atribut inline style. *(6 poin)* 

jawab : <p style=color:blue>Halo Dunia</p>

---

**7.** Tulis tag HTML untuk menampilkan teks **tebal** dan teks **miring** secara bersamaan dalam satu kalimat: *Ini Penting*. *(6 poin)* 

jawab : <b>ini penting</b><i>ini penting</i>

---

**8.** Tulis contoh penulisan gambar dengan link `https://via.placeholder.com/200`, sertakan juga atribut `alt` yang berbunyi "Gambar Contoh". *(6 poin)*  

jawab : <img src="https://via.placeholder.com/200" alt="Gambar contoh">

---

**9.** Bagaimana cara menampilkan video dari link `https://www.w3schools.com/html/mov_bbb.mp4` yang bisa dikontrol (play/pause)? *(6 poin)*

jawab : <video control><source src="https://www.w3schools.com/html/mov_bbb.mp4"></video>

---

**10.** Apa perbedaan fungsi antara tag `<tr>` dan `<td>` dalam tabel HTML? *(6 poin)*  

jawab : <tr> adalah kode yang berfungsi untuk mendeklarasikan suatu komen tabel,sedangkan <td> adalah kode yang berfungsi menentukan anakan tabel

---

## Bagian C: Praktik Kode (2 Soal × 20 poin = 40 poin)  

**11.** Buatlah struktur kode HTML lengkap yang berisi: *(20 poin)*  
- Judul halaman: "Latihan HTML Menengah"  
- Heading 1: "Materi HTML"  
- Paragraf: "HTML adalah fondasi website."  
- Link menuju `https://w3schools.com` dengan teks "Belajar di W3Schools"  
- Gambar dari `https://via.placeholder.com/100` dengan keterangan alternatif "Logo Sementara"  
- Tabel 2 baris, 2 kolom dengan data:  
    - Baris 1: "Nama" dan "Umur"  
    - Baris 2: "Ali" dan "20" 
    
    jawab : <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan HTML Menengah</title>
</head>
<body>
    <h1>Materi HTML</h1>
    <p>HTML adalah fondasi website</p>
    <a href="https://w3schools.com">Belajar di W3Shools</a>
    <img> <source src="https://via.placeholder.com/100" alt="Logo Sementara">
</body>
</html>

---

**12.** Buatlah kode HTML yang memuat: *(20 poin)*  
- Gambar dari `https://via.placeholder.com/150`  
- Video dari `https://www.w3schools.com/html/mov_bbb.mp4` yang dapat diputar  
- Formulir input nama lengkap (wajib diisi) dan tombol kirim yang berisi tulisan "Submit Form"  

jawab : <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img> <source src="https://via.placeholder.com/150">
    <video control><source src="https://www.w3schools.com/html/mov_bbb.mp4">
    <form action="/path">
    <fieldset>
    <label for="name">nama lengkap</label>
    <output type="text" name="name"/><br>
    </fieldset>
    <button>Submit form</button>
    </form>
</body>
</html>

---

# **Total Skor Maksimal: 100 poin**