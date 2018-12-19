<?php
session_start();
class resources_libs_UserIdentity {
    public $email;
    public $password; 

    protected $id;

    public function __construct($email="", $password="") {
        $this->email = $email;
        $this->password = $password;
    }

    public function encryptPassword() {
        return md5($this->password);
    }

    //  INSERT INTO `nguoidung`( `email`, `hoten`, `matkhau`, `ngaysinh`, `gioitinh`, `quyentruycap` ) 
    // VALUES( "admin@gmail.com", "Admin", md5("123"), "20-11-2011", "1", "admin" )
    public function register() {
        $db = new resources_models_Users();
        $query = $db->buildQueryParams([
            "email"=>""
        ])->insert();
        
        if ($query) {
            $_SESSION["hoten"] = $query["hoten"];
            $_SESSION["email"] = $query["email"];
            return true;
        }
        return false;
    }

    public function login() {
        $db = new resources_models_Users();
        
        $query = $db->buildQueryParams([
            "where"=>"email = :email AND matkhau=:password",
            "params"=> [
                ":email"=>trim($this->email),
                ":password"=>$this->encryptPassword()
            ]
        ])->selectOne();

        if ($query) {
            $_SESSION["id"] = $query["id"];
            $_SESSION["hoten"] = $query["hoten"];
            $_SESSION["quantri"] = $query["quantri"];
            return true;
        }
        return false;
    }

    public function logout() {
        unset($_SESSION["id"]);
        unset($_SESSION["hoten"]);
        unset($_SESSION["quantri"]);
    }

    public function getSESSION($name) {
        if ($name !== NULL) {
            return isset($_SESSION[$name]) ? $_SESSION[$name] : NULL;
        }
        return $_SESSION;
    }

    public function isLogin() {
        if ($this->getSESSION("email")) {
            return true;
        }
        return false;
    }

    public function getId() {
        return $this->getSESSION("email");
    }

    
}