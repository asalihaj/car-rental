<?php
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/contactMapper.php');
include($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/classes/contact/contact.php');

if (isset($_POST['contact-submit'])) {
    $contact = new ContactValidation($_POST);
    $contact->verify();
    header("Location:../main/index.php");
}

class ContactValidation
{
    private $name = "";
    private $email = "";
    private $message = "";

    public function __construct($formdata)
    {
        $this->name = $formdata['contact-name'];
        $this->email = $formdata['contact-email'];
        $this->message = $formdata['message'];
    }

    public function verify()
    {
        $contact = new Contact($this->name, $this->email, $this->message);
        if ($contact->validate()) {
            $mapper = new ContactMapper();
            $mapper->insertContactForm($contact);
        }
    }
}
