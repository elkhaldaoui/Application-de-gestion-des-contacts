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
            if(empty($this->username) || empty($this->email) || empty($this->password)) {
                header("location: ./register.php?error=emptyInputs");
                exit();
            }

            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
               header("location: ./register.php?error=invalidEmail");
                exit();
            }
    
            if($this->checkUser($this->email) == true){
                header("location: ./register.php?error=emailAlreadyExist");
                exit();
            }
            static::query("INSERT INTO users(username,email,password,registration_date)".
            " VALUES('$this->username','$this->email','$this->password','$this->registration_date')");
        }

        public function checkUser($email){
            $res = static::query("SELECT * FROM users WHERE email = '$this->email';");
            if(count($res) > 0){
                return true;
            }
            else{
                return false;
            }
        }

        public static function login($emaillg, $passwordlg){
            if(empty($emaillg) || empty($passwordlg)) {
                header("location: ./index.php?error=emptyInputs");
                exit();
            }
            $sql = "SELECT * FROM users WHERE email = '$emaillg' AND password = '".md5($passwordlg)."'";
            $res = static::query($sql);
            if($res){
                // create session
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['user_id'] = $res[0]['id'];
                $_SESSION['username'] = $res[0]['username'];
                $_SESSION['email'] = $res[0]['email'];
                $_SESSION['password'] = $res[0]['password'];
                $_SESSION['registration_date'] = $res[0]['registration_date'];
                
            }else{
                header("location: ./index.php?error=UserNotFound");
                exit();
            }
        }

        public function logout(){
            session_start();
            session_destroy();
            header("Location:index.php");
        }   

        
    }  