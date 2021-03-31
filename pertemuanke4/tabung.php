<?php
    class Tabung {
        private $diameter;
        private $tinggi;
        private $r;
        private $luasselimut;
        private $phi = 3.14;

        // public function_contractisd, stl {
        //     $this->diameter = $d;
        //     $this->tinggi = $t;
        // }

        public function setDiameter($value){
            $this->diameter = $value;
        }
        public function setTinggi($value){
            $this->tinggi = $value;
        }

        public function hitungLuas(){
            $this->luas_selimut = 3.14 * $this-> diameter *$this ->tinggi;
        }

        public function getLuasSelimut(){
            return $this->luasselimut;
        }

        public function 

    }

?>

