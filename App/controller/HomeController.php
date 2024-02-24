<?php

class Homecontroller extends Controller
{
    private $UserModel;
    private $ProductModel;
    public function __construct()
    {
        $this->UserModel = $this->model('UserModel');
        $this->ProductModel = $this->model('SanPhamModel');
    }
    public function index()
    {
        $validate = [];
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $name = $_POST['user'];
            $pass = $_POST['pass'];
            $row = $this->UserModel->Login($name);
            // echo '<pre>';
            // var_dump($row);
            // echo '</pre>';
            if(empty($_POST['user']))
            {
                $validate += [
                    'validateUser' => "*không được trống"
                ];
            }
            if(empty($_POST['pass']))
            {
                $validate += [
                    'validatePassword' => "*mật khẩu không được trống"
                ];
            }
            if(empty($row))
            {
                $validate += [
                    'Error' => "Tài khoản không tồn tại"
                ];
            }
            else
            {
                $hashPassword = $row[0]['mat_khau'];
                if(password_verify($pass,$hashPassword) && empty($validate))
                {
                    $_SESSION['admin_id'] = $row[0]['ma_kh'];
                    header("Location: /admin");
    
                }
            }  
        }
        
        $this->view('cilent', [
            'validate' =>$validate,
            'Product' => $this->ProductModel->getAll(),
        ]);
    }
}