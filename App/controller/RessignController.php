<?php
class Ressigncontroller extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model("UserModel");
    }
    public function index()
    {
        $validate = [];
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $pass = $_POST['pass'];
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
            $user = $_POST['user'];
            $email = $_POST['email'];
            $checkEmail = $this->userModel->GetOneByEmail($email);
            $checkUser = $this->userModel->Login($user);
            if(empty($_POST['email']))
            {
                $validate += 
                [
                    'validateEmail' => "*email không được trống"
                ];
            }
            else if(strpos($_POST['email'], '@') == false)
            {
                $validate += 
                [
                    'validateEmail' => "*phải nhập email có định dạng @"
                ];
            }
            else if(!empty($checkEmail))
            {
                $validate += 
                [
                    'validateEmail' => "*mail đã tồn tại"
                ];  
            }

            if(empty($_POST['user']))
            {
                $validate += 
                [
                    'validateUserR' => "*tên đăng nhập không được trống"
                ];
            }

            else if(strlen($_POST['user'])<5)
            {
                $validate += 
                [
                    'validateUserR' => "*Vui lòng nhập lớn hơn 5 ký tự"
                ]; 
            }

            else if(!empty($checkUser))
            {
                $validate += 
                [
                    'validateUserR' => "*tên đã tồn tại"
                ];  
            }

            if(empty($_POST['pass']))
            {
                $validate += 
                [
                    'validatePass' => "*Mật khẩu không được trống"
                ];
            }

            else if(strlen($_POST['pass'])<8)
            {
                $validate += 
                [
                    'validatePass' => "*Vui lòng nhập lớn hơn 8 ký tự"
                ]; 
            }

            if(empty($validate))
            {
                if($this->userModel->ressign($hashed_password,$email,$user,))
                {
                    header("Location: /");
                }
            }


        }

        $this->view("RessignLayout", [
            "pages" => "loaihang",
            "block" => "loaihang/danhsachloaihang",
            "validate" => $validate
            
        ]);
    }
}