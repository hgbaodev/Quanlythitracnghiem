<?php
class Auth extends Controller{

    public $userModel;

    function __construct()
    {
        $this->userModel = $this->model("NguoiDungModel");
    }

    public function default()
    {
        $this->view("single_layout", [
            "Page" => "auth/signin",
            "Title" => "Đăng nhập"
        ]);
    }

    function signin(){
        $this->view("single_layout", [
            "Page" => "auth/signin",
            "Title" => "Đăng nhập",
            "Script" => "signin",
            "Plugin" => [
                "jquery-validate" => 1
            ]
        ]);
    }

    function signup(){
        $this->view("single_layout", [
            "Page" => "auth/signup",
            "Title" => "Đăng ký tài khoản",
            "Script" => "signup",
            "Plugin" => [
                "jquery-validate" => 1
            ]
        ]);
    }

    function recover(){
        $this->view("single_layout", [
            "Page" => "auth/recover",
            "Title" => "Khôi phục tài khoản",
            "Script" => "recover",
            "Plugin" => [
                "jquery-validate" => 1
            ]
        ]);
    }

    public function addUser()
    {   
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = $this->userModel->insert($fullname,$email,$password);
        echo $result;
    }
}
?>