<?php
require_once ('Database.php');
    class User extends Database{
        public $id;
        public $usename;
        public $password;
        public $email;
        public $photo;
        public $registration_date;
        
        public function register(){
            static::query("INSERT INTO users(username,email,password,registration_date)".
            " VALUES('$this->username','$this->email','$this->password','$this->registration_date')");
            header("Location: index.php");

        }

        public static function login($emaillg, $passwordlg){
            $sql = "SELECT * FROM users WHERE email = '$emaillg' AND password = '".md5($passwordlg)."'";
            $res = static::query($sql);
            if($res){
                // create session
                header("Location:profile.php");
                exit();
            }else{
                echo "Wrong email or password"; 
            }
        }

        public static function get($email){
 
        }

        public static function searchEmail($email)
        {
            $res = static::query("SELECT * FROM users WHERE email = '$email'");

            return $res;
        }
    }  