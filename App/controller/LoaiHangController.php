<?php
class Loaihangcontroller extends Controller
{
    private $loaihang;
    public function __construct()
    {
        $this->loaihang = $this->model("LoaiHangModel");
        checkAdmin();

    }
    public function index()
    {
        $this->view("Adminlayout", [
            "pages" => "loaihang",
            "block" => "loaihang/danhsachloaihang",
            "loaihang" => $this->loaihang->GetAllLoaiHang()
        ]);
    }

    public function add()
    {
        $validate = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['tenloai'])) {
                $validate +=
                    [
                        "validateName" => '*tên hàng hóa không được trống'
                    ];
            }
            $name = $_POST['tenloai'];
            if (empty($validate)) {
                $this->loaihang->CreateLoaiHang($name);
                header("Location:/loaihang");
            }
        }

        $this->view("Adminlayout", [
            "pages" => "loaihang",
            "block" => "loaihang/themloaihang",
            'validate' => $validate

        ]);
    }

    public function delete()
    {
        $id = $_GET['id'];
        try {
            $delete = $this->loaihang->DeleteLoaiHang($id);
            if ($delete) {
                header("Location: /loaihang");
                exit;
            }
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                echo "Vui lòng xóa sản phẩm thuộc danh mục này.";
            } else {
                echo "Đã xảy ra lỗi khi xóa thể loại: " . $e->getMessage();
            }
        }
    }

    public function edit()
    {
        $validate = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST['tenloai'])) {
                $validate +=
                    [
                        "validateName" => '*tên hàng hóa không được trống'
                    ];
            }

            $name = $_POST['tenloai'];
            if (empty($validate)) {
                $this->loaihang->EditLoaiHang($name);
                header("Location:/loaihang");
            }
        }


        $this->view('AdminLayout', [
            "pages" => "loaihang",
            "block" => "loaihang/sualoaihang",
            "loaihang" => $this->loaihang->GetOneLoaiHang(),
            'validate' => $validate
        ]);
    }
}
