<?php

class Kendaraan {
  // properti
  public $merek;
  public $jendela;
  public $ban;

  // konstruktor
  public function __construct($merek, $jendela, $ban) {
    $this->merek = $merek;
    $this->jendela = $jendela;
    $this->ban = $ban;
  }

  // method
  public function infoKendaraan() {
    echo "Kendaraan {$this->merek} ini memiliki {$this->jendela} jendela dan {$this->ban} ban.";
  }
}

// class baru yang mewarisi class Kendaraan
class Tesla extends Kendaraan {
  // properti baru
  public $mesin;

  // konstruktor
  public function __construct($merek, $jendela, $ban, $mesin) {
    // memanggil konstruktor dari class parent
    parent::__construct($merek, $jendela, $ban);

    $this->mesin = $mesin;
  }

  // method
  public function infotesla() {
    echo "Mobil Tesla ini memiliki {$this->jendela} jendela, {$this->ban} ban, dan mesin {$this->mesin}.";
  }
}

// membuat object berdasarkan class BMW
$mobilTesla = new Tesla("Tesla", 4, 4, "turbo");

// menampilkan informasi mobil BMW
echo $mobilTesla->infoTesla();