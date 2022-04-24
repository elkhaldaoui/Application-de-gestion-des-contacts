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
            static::query("INSERT INTO contacts(username, email, adresse, phone , id_user)".
            " VALUES('$this->username','$this->email','$this->adresse','$this->phone','$this->id_user')");
        }

        public function getContact($id){
            $sql = "SELECT * FROM contacts WHERE id = '$id'";
            $res = static::query($sql);
            return $res;
        }

        public function getAllContacts($id_user){
            $sql = "SELECT * FROM contacts WHERE id_user = '$id_user'";
            $res = static::query($sql);
            return $res;

        }  

        public function updateContact($id){
            static::query("UPDATE contacts SET username = '$this->username', email = '$this->email', phone = '$this->phone', adresse = '$this->adresse' WHERE id = '$id';");
        }

        public function deleteContact($id){
            static::query("DELETE FROM contacts WHERE id = '$id';");
        }   
    }