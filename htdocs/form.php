<?php

class form {
        private $data;
        public $surround = 'p';

        public function __construct($data = array()){
            $this -> data = $data;
        }

        public function create($method){
            return '<form method="'. $method . '">';
        }

        private function getValue($key){
            return isset($this->data[$key]) ? $this->data[$key] : NULL;
        }

        private function surround($html){
            return "<{$this-> surround}> $html </{$this-> surround}>";
        }

        public function input($type, $name){
            return $this -> surround(
                '<label for="' . $name .'">' . $name .'</label>
                <input type="' . $type .'" name="' . $name .'"value="' . $this->getValue($name) .'">'
            );
        }

        public function select($name, $values){
            foreach ($values as $value) {
            $option .= '<option value="' . $value . '">' . $value . '</option>';
                }
            return $this -> surround('<select name="' . $name . '">' . $option . '</select>');
        }

        public function textarea($rows, $name){
            return $this -> surround(
                '<label for="' . $name . '">' . $name . '</label>
                <textarea rows="' . $rows .'" name="' . $name . '"value="' . $this->getValue($name) . '"></textarea>');
        }

        public function checkInput($type, $name, $values){
            foreach ($values as $value) {
                $box .= '<input type="' . $type . '" value="' . $value . '" name="' . $name . '">
                        <label for="' . $name . '">' . $value . '</label>';
            }
            return $this -> surround($box);
        }

        public function submit(){
            return $this -> surround('<button type="submit" name="submit">Envoyer</button>');
        }
    } 
?>