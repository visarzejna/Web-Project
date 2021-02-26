<?php 
    class ContactModel {
        protected $name;
        protected $subject;
        protected $message;

        function __construct($name, $subject, $message){
            $this->name = $name;
            $this->subject = $subject;
            $this->message = $message;
        }

        public function getName(){
            return $this->name;
        }
        public function getSubject(){
            return $this->subject;
        }
        public function getMessage(){
            return $this->message;
        }
        
    
    }
?>