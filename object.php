<?php

//     class laptop{
//         public function harga(){
//             $harga = 750000;
//             return $harga;
//         }
//     }

//    $laptop = new laptop();
//     echo $laptop->harga();


class  Manusia{
	public static $bahasa;
  public  static  $makanan_pokok;
    
    	public static  function eropa($bahasa, $makanan_pokok){
        	
          echo "bahasa yang digunakan adalah". self::$bahasa = $bahasa. "dan makanan pokok nya adalah".self::$makanan_pokok = $makanan_pokok;
          return new static;
        
        }

        public static function asia($bahasa, $makanan_pokok){
            echo "bahasa yang digunakan adalah". self::$bahasa = $bahasa. "dan makanan pokok nya adalah".self::$makanan_pokok = $makanan_pokok.self::eropa("deutsch","kentang");
            return new static;
        }


}


Manusia::eropa('inggris','roti')->asia('indonesia','nasi');

// $orang = new Manusia();
// $orang->eropa('inggris','roti');

class  Komputer{
	public  $spek;
    public   $harga;
    
    	public function asus($spek, $harga){
        	
          echo "SPek dari komputer Asus adalah ". $this->spek = $spek. "Harga nya adalah ".$this->harga= $harga;
          return $this;
        
        }

        public function lenovo($spek, $harga){
            echo "SPek dari komputer Asus adalah ". $this->spek = $spek. "Harga nya adalah ".$this->harga = $harga;
          return $this;
        }


}

$pc = new Komputer();
$pc->asus('tinggi','12 jt')->lenovo('sedang', '8 jt');

class Asia extends Manusia{
  public function manusia(){
    return $this->eropa("suka pake bahasa inggris","suka makan roti");
  }

}

$asia = new Asia();
 $asia->manusia();



