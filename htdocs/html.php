<?php
    class html {
        public $surround = 'p';

        private function surround($html){
            return "<{$this-> surround}> $html </{$this-> surround}>";
        }

        public function css($link){
            return $this -> surround( '<link rel="stylesheet" href="' . $link . '"/>');
        }

        public function meta($name, $content){
            return $this -> surround('<meta name="' . $name . '" content="' . $content . '"/>');
        }

        public function img($link, $alt){
            return $this -> surround('<img src="' . $link . '" alt="' . $alt .'"/>');
        }

        public function link($link, $name){
            return $this -> surround('<a href="' . $link . '"/>' . $name . '</a>');
        }

        public function js($link){
            return $this -> surround( '<script src="' . $link . '"></script>');
        }


    }

?>