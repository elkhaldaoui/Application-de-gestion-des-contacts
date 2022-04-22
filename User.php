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
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['user_id'] = $res[0]['id'];
                $_SESSION['username'] = $res[0]['username'];
                $_SESSION['email'] = $res[0]['email'];
                $_SESSION['password'] = $res[0]['password'];
                $_SESSION['registration_date'] = $res[0]['registration_date'];
                header("Location: profile.php");
                
            }else{
                echo "Wrong email or password"; 
            }
        }

        public function logout(){
            session_start();
            session_destroy();
            header("Location:index.php");
        }   

        
    }  