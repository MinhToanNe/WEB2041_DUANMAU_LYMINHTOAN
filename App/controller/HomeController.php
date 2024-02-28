<?php

class Homecontroller extends Controller
{
    private $UserModel;
    private $ProductModel;
    private $categoryModel;
    public function __construct()
    {
        $this->UserModel = $this->model('UserModel');
        $this->ProductModel = $this->model('SanPhamModel');
        $this->categoryModel = $this->model('LoaiHangModel');
    }
    public function index()
    {
        $validate = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['user'];
            $pass = $_POST['pass'];
            $row = $this->UserModel->Login($name);
            if (empty($_POST['user'])) {
                $validate += [
                    'validateUser' => "*không được trống"
                ];
            }
            if (empty($_POST['pass'])) {
                $validate += [
                    'validatePassword' => "*mật khẩu không được trống"
                ];
            }

            if (empty($row)) {
                $validate += [
                    'Error' => "Tài khoản không tồn tại"
                ];
            } else {
                $hashPassword = $row[0]['mat_khau'];
                if (!password_verify($pass, $hashPassword)) {
                    $validate += [
                        'validatePassword' => "*mật khẩu không chính xác"
                    ];
                }
                if (password_verify($pass, $hashPassword) && empty($validate) && $row[0]['vai_tro'] == 0) {
                    $_SESSION['admin_id'] = $row[0]['ma_kh'];
                    header("Location: /admin");
                }
            }
        }

        $this->view('cilent', [
            'validate' => $validate,
            'Product' => $this->ProductModel->getAll(),
            'category' => $this->categoryModel->GetAllLoaiHang()
        ]);
    }

    public function detailproduct()
    {
        if (isset($_GET['id'])) {
            $this->view('detailProduct', [
                'product' => $this->ProductModel->getOneSanPham(),
                'category' => $this->categoryModel->GetAllLoaiHang()
            ]);
        }
    }
}
