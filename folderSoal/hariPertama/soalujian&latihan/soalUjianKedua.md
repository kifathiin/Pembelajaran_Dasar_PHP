



# Soal Latihan PHP Dasar & OOP

**Total Skor Maksimal: 100 poin**

---

## A. Function dan Array (Total: 20 poin)

1. **(5 poin)**  
   Buatlah sebuah function bernama `hitungLuasPersegi` yang menerima satu parameter (`sisi`) dan  
   mengembalikan luas dari persegi.

   jawab:
    <?php

   function hitungLuasPersegi($sisi) {
  // Menghitung luas persegi dengan menggunakan matematik kali sisi dengan sisi
  $luas = $sisi * $sisi;
  return $luas;
   }
   ?>

2. **(5 poin)**  
   Buat array associative untuk menyimpan data berikut:  
   - `nama`: "Dani"  
   - `umur`: 17  
   - `jurusan`: "RPL"  
   Lalu tampilkan masing-masing nilainya menggunakan `echo`.

jawab :

<?php
$data = [
   "nama" => "dani";
   "umur" => 17;
   "jurusan" => "RPL";
]
echo $data[];

?>


3. **(5 poin)**  
   Buat sebuah array yang berisi 5 nama buah.  
   Gunakan perulangan `foreach` untuk menampilkannya satu per satu.

jawab :

<?php
$array = [
    "apel";
    "jambu";
    "mangga";
    "anggur";
    "semangka";
]

  foreach ($array as "b") {
    echo ....
  }


?>


4. **(5 poin)**  
   Diberikan array berikut:  
   ```php
   $angka = [1, 2, 3];
   ```  
   Tambahkan angka `4` ke dalam array tersebut **tanpa menghapus data sebelumnya**,  
   lalu tampilkan seluruh isi array menggunakan `foreach`.

jawab :

<?php
$angka = [1, 2, 3];

$angka = [1, 2, 3, 4];

foreach ($array as $a);

print_r $array;
?>

---

## B. OOP dan Class (Total: 40 poin)

5. **(10 poin)**  
   Buat sebuah class bernama `Mahasiswa` yang memiliki properti `nama` dan `nim`.  
   Buat constructor untuk mengisi properti tersebut, dan method `perkenalan()` yang menampilkan:  
   ```
   Halo, saya [nama] dengan NIM [nim]
   ```
<?php
class mahasiswa {
    //properti
public $nama;
public $nim;

//method
function set_nama ($nama) {
   $this->nama = $nama;
}

function get_nama () {
    return $this->nama;
}

function set_nim ($nim) {
    $this->nim =($nim);
}


function get_nim () {
    return $this->nim;
}
}

$mahasiswa = new nim(); //object;

$mahasiswa->set_nama("fathiin");
$mahasiswa->set_nim("terserah");

echo "halo nama saya ." ". $mahasiswa->get_nama() ." ". "dengan NIM" ." ". $mahasiswa->get_nim();



6. **(10 poin)**  
    Buat class `Karyawan` dengan properti `nama` dan method `kerja()`.  
    Kemudian buat class `Manager` yang merupakan turunan dari `Karyawan`  
    dan memiliki method tambahan `pimpinRapat()`.

    jawab:
<?php

class Karyawan {
    public $nama;  //properti
    
    //method
    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function kerja() {
        return $this->nama . " sedang bekerja.";
    }
}

class Manager extends Karyawan {
    public function pimpinRapat() {
        return $this->nama . " sedang memimpin rapat.";  //object
    }
}

?>

7. **(10 poin)**  
   Jelaskan secara singkat (boleh dalam bentuk komentar di kode):  
   - Apa itu **constructor** dan kapan dipanggil?  
   - Apa itu **destructor** dan kapan dipanggil?

jawab :
     Constructor adalah sebuah metode khusus dalam sebuah kelas yang secara otomatis 
     setiap kali sebuah objek baru dari kelas tersebut dibuat.
     Tujuannya adalah untuk memprioritaskan sebuah properti objek atau melakukan setup awal
     yang diperlukan saat objek pertama kali dibuat.

     Destructor juga merupakan metode khusus dalam sebuah kelas yang secara otomatis dipanggil
     ketika sebuah objek tidak lagi direferensikan atau akan dihapus  dari memori.
     Tujuannya adalah untuk melakukan operasi pembersihan sebelum objek dihapus,
     seperti menutup koneksi database, melepaskan sumber daya, atau menyimpan data.



8. **(10 poin)**  
   Tambahkan **access modifier** pada class berikut ini:  
   - Properti `nama` sebagai `private`  
   - Method `perkenalan()` sebagai `public`  
   - Method `hitungGaji()` sebagai `protected`  
   Jelaskan arti dari masing-masing access modifier tersebut dalam bentuk komentar di dalam kode.

   jawab:
   
   <?php
   
   class example{
   
   private $nama;  //properti

   //method
function public set_perkenalan (perkenalan) {
   $this->perkenalan = $perkenalan;
}

function public get_perkenalan() {
    return $this->perkenalan;
}

function protected set_hitungGaji ($hitungGaji) {
    $this->hitungGaji = $hitungGaji;
}
function protected get_hitungGaji () {
    return $this->hitungGaji;
}

$access modifier = new example();  //object 

};
   ?>
   
---

## C. Loop dan Switch (Total: 20 poin)               

9. **(10 poin)**  
   Buat perulangan `for` dari 1 sampai 5.  
   Tampilkan output seperti berikut:
   ```
   Ini adalah perulangan ke-1  
   Ini adalah perulangan ke-2  
   Ini adalah perulangan ke-3  
   Ini adalah perulangan ke-4  
   Ini adalah perulangan ke-5

   jawab:

<?php

for ($a = 1; $a <= 5; $a++) {
    echo "ini adalah perulangan ke-$a <br>";
}

?>
   ```

10. **(10 poin)**  
    Buat program menggunakan `switch` untuk mencetak keterangan hari berdasarkan variabel `$hari`.  
    Contoh:
    ```php
    $hari = "Senin";
    ```
    - Jika `Senin` hingga `Jumat`: tampilkan "Hari kerja"  
    - Jika `Sabtu` atau `Minggu`: tampilkan "Hari libur"  
    - Selain itu: tampilkan "Hari tidak dikenali"

    jawab:

    <?php

    $hari = "senin";
    switch = ($hari) {
    case "senin";
    echo "hari kerja";
    break;
    case "selasa";
    echo "hari kerja";
    break;
    case "rabu";
    echo "hari kerja";
    break;
    case "kamis";
    echo "hari kerja";
    break;
    case "jumat";
    echo "hari kerja";
    break;
    case "sabtu";
    echo "hari libur";
    break;
    case "ahad";
    echo "hari libur";
    break;
   default:
   echo "hari tidak dikenali";
    };

   ?>

---

## Skema Penilaian

| Bagian            | Nomor Soal | Skor Maks |
|-------------------|------------|-----------|
| Function & Array  | 1 - 4      | 20 poin   |
| OOP & Class       | 5 - 8      | 40 poin   |
| Loop & Switch     | 9 - 10     | 20 poin   |
| Penjelasan kode   | 7, 8       | 20 poin   |
| **Total**         |            | **100**   |


