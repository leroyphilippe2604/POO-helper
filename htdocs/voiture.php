<?php
    class voiture {
        public $poids;
        public $color;
        public $km; 
        public $type;
        public $country;
        public $usure;
        public $img;
        private $immatriculation;
        private $circulation;
        private $modele;
        private $marque;
        private $reservation;
        
    
        public function __construct($marque, $modele, $km, $color, $poids, $circulation, $immatriculation, $img){
            $this-> marque = $marque;
            $this-> modele = $modele;
            $this-> km = $km;
            $this-> color = $color;
            $this-> poids = $poids;
            $this-> circulation = $circulation;
            $this-> immatriculation = $immatriculation;
            $this-> reserved($marque);
            $this-> PL($poids);
            $this-> from($immatriculation);
            $this-> usure($km);
            $this-> img = $img;
        }

        private function reserved($marque){
            if($marque == "Audi"){
                $this-> reservation = "Reserved";
            } else{
                $this-> reservation = "free";
            }
            /* ($marque == "audi") ? $this-> reservation = "reserved" : $this-> reservation ="free"; */
        }
        
        
        public function PL($poids){
            if($poids > 3500){
                $this-> type = "Utilitaire/Commercial";
            } else{
                $this-> type = "Voiture";
            }
        }

        private function from($immatriculation){
            switch (substr($immatriculation, 0, 2)) {
                case "BE":
                    $this-> country = "BELGIQUE";
                    break;
                case "FR":
                    $this-> country = "FRANCE";
                    break;
                case "DE":
                    $this-> country = "ALLEMAGNE";
                    break;
            }
        }

        public function usure($km){
            if($km < 100000){
                $this-> usure = "low";
            }elseif($km > 100000){
                $this-> usure = "medium";
            }elseif($km > 200000){
                $this-> usure = "high";
            }
        }

        private function rouler(){
            $this-> km += 100000;
            $this-> used = usure($km);
        }

        public function display(){
            return "<tr>
            <td>$this->reservation</td>
            <td>$this->marque</td>
            <td>$this->modele</td>
            <td>$this->km</td>
            <td>$this->color</td>
            <td>$this->poids</td>
            <td>$this->circulation</td>
            <td>$this->immatriculation</td>
            <td><img src='$this->img' alt='belle voiture' width='200px'>
                </tr>";
        }
    }
?>