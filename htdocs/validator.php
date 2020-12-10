<?php
    class validator {
        
        public function bool($data){
            if(filter_var($data, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)){
                return;
            }else{
                return "Ce n est pas un boolean";
            }
        }

        public function string($data){
            if(filter_var($data, FILTER_VALIDATE_REGEXP)){
                return;
            }else{
                return "Ce n'est pas un string";
            }
        } 

        public function int($data){
            if(filter_var($data, FILTER_VALIDATE_INT)){
                return;
            }else{
                return "ce n'est pas un chiffre";
            }
        }

        public function email($data){
            if(filter_var($data, FILTER_VALIDATE_EMAIL)){
                return;
            }else{
                return "ce n est pas un email";
            }
        }

        public function float($data){
            if(filter_var($data, FILTER_VALIDATE_FLOAT)){
                return;
            }else{
                return "ceci n'est pas un nombre decimal";
            }
        }
    }
?>