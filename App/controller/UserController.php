<?php

class UserController extends Controller
{
    private $UserModel;
    public function __construct()
    {
        checkAdmin();
        $this->UserModel = $this->model('UserModel');
    }
    public function index()
    {

        $this->view('AdminLayout', [
            'pages' => 'hanghoa',
            'block' => 'User/danhsachUser',
            'user' => $this->UserModel->GetAllUser()
        ]);
    }

    public function delete()
    {
        if ($this->UserModel->delete()) {
            header("Location: /user");
        }
    }

    public function logout()
    {
        unset($_SESSION['admin_id']);
        header("Location: /");
    }
}
