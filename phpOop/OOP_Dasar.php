<?php
class buah {
    //properti
public $namatoko;
public $namabuah;

//method
function set_toko ($namatoko) {
   $this->namatoko = $namatoko;
}

function get_toko () {
    return $this->namatoko;
}

function set_buah ($namabuah) {
    $this->namabuah = $namabuah;
}


function get_buah () {
    return $this->namabuah;
}
}

$fruit = new buah(); //object;

$fruit->set_toko("toko buah segar");
$fruit->set_buah("apel");

echo "saya membeli buah" ." ". $fruit->get_buah() ." ". "di toko" ." ". $fruit->get_toko();

echo"<hr>";

class oop {
    public $nama; //properti

    function __destruct() // akan dijalankan terakhir
    {
        echo "object {$this->nama} dihancurkan <br>";
    }
    function __construct ($nama) // akan dijalankan pertama kali
    {
        $this->nama;
        echo "object {$this->nama} dibuat <br>";
    }

}

$nama = new oop("fathiin"); // object

echo"<hr>";

class induk {
    public $ayah;
    protected $ibu;
    private $anak;

    public function set_ayah ($ayah) {
        $this->ayah = $ayah;
    }
    public function set_ibu ($ibu) {
        $this->ibu = $ibu;
    }
    public function set_anak ($anak) {
        $this->anak = $anak;
    }

    //access private 
    public function get_anak() {
        echo $this->anak;
    }
    
    }

    class anakan extends induk {
        public function get_ayah() // access public
        {
            echo $this->ayah;
        }
        public function get_ibu() // access protected
        {
            echo $this->ibu;
        } 

    }

$cabang = new anakan();

$cabang->set_ayah("bambang");
$cabang->set_ibu("rini");
$cabang->set_anak("paijo");

$cabang->get_ayah();
echo "<br>";
$cabang->get_ibu();
echo "<br>";
$cabang->get_anak();
echo "<br>";



























































?>