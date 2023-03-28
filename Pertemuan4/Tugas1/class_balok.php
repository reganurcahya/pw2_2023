<?php
		/**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
		 */ 

    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
    
        // Method __construct untuk menginisialisasi properti dengan nilai yang diberikan
        public function __construct($p = 1, $l = 1, $t = 1) {
		        $this->panjang = $p;
            $this->lebar = $l;
            $this->tinggi = $t;
        }
    
        // Method getLuas untuk menghitung luas permukaan balok
        public function getLuas() {
					  return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
				}
    
        // Method getKeliling untuk menghitung keliling balok
        public function getKeliling() {
            return 4 * ($this->panjang + $this->lebar + $this->tinggi);
        }
    
        // Method getVolume untuk menghitung volume balok 
        public function getVolume() {
            return $this->panjang * $this->lebar * $this->tinggi;
        }
    }
?>