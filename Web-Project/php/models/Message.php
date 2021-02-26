<?php
class Message
{
    private $name = "";
    private $subject = "";
    private $message = "";

    public function __construct($data)
    {
        $this->username = $data['name'];
        $this->password = $data['subject'];
        $this->userEmail = $data['message'];
    }

    public function send()
    {
        $contact_model = new ContactModel($this->name, $this->subject,$this->message);
        $contact = new contact();
        $contact = $contact->create($contact_model);
        if($contact) {
            header("Location:../views/Vincero.php");
        }
    }
}