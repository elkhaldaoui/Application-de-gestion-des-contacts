<?php
require_once ('Database.php');
    class Contact extends Database{
        public $id;
        public $usename;
        public $email;
        public $adresse;
        public $phone;

        function __construct() {    
        }
        
        public function addContact(){
            static::query("INSERT INTO contacts(username, email, adresse, phone)".
            " VALUES('$this->username','$this->email','$this->adresse','$this->phone')");
        }

        public function getContact($id){
            $sql = "SELECT * FROM contacts WHERE id = '$id'";
            $res = static::query($sql);
            return $res;
        }

        public function getAllContacts(){
            $sql = "SELECT * FROM contacts";
            $res = static::query($sql);
            return $res;

        }  

        public function updateContact($id){
            static::query("UPDATE contacts SET username = '$this->username', email = '$this->email', adresse = '$this->adresse', phone = '$this->phone' WHERE id = '$id'");
        }

        public function deleteContact($id){
            static::query("DELETE FROM contacts WHERE id = '$id'");
        }
    }