<?php 

    class SendMessage{
        private $name ="";
        private $subject = "";
        private $message = "";
        
        public function __construct($data){
            $this->name = $data['name'];
            $this->subject = $data['subject'];
            $this->message = $data['message'];
        }
        public function validate(){
            return !(empty($this->name) || empty($this->subject) || empty($this->message));
        }

        public function send(){
            if(!$this->validate()){
                echo 'Nuk keni shtuar te gjitha te dhenat!';
                return false;
            }
            $contact_model = new ContactModel( $this->name, $this->subject, $this->message);
            $contact = new Contact();
            $contact = $contact->create($contact_model);
            if($contact){
                header ("Location: ../../views/contact.php");
            }
        }
    }
?>