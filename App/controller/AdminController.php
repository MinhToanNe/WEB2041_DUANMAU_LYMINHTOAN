<?php

class AdminController extends Controller
{
    private $danhmucModel;
    private $SanPhamModel;
    public function __construct()
    {
        checkAdmin();
        $this->danhmucModel = $this->model('LoaiHangModel');
        $this->SanPhamModel = $this->model('SanPhamModel');
    }
    public function index()
    {

        $this->view('AdminLayout', [
            'pages' => 'hanghoa',
            'block' => 'SanPham/danhsachsanpham',
            'product' => $this->SanPhamModel->getAll()
        ]);
    }
    public function add()
    {

        $validate = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST['name'])) {
                $validate += [
                    'validateName' => "*tên hàng hóa không được trống"
                ];
            }
            if (empty($_FILES['image'])) {
                $validate += [
                    'validateImage' => "*vui lòng chọn hình ảnh"
                ];
            }
            if (empty($_POST['content'])) {
                $validate += [
                    'validateContent' => "*mô tả không được trống"
                ];
            }
            if (empty($_POST['price'])) {
                $validate += [
                    'validatePrice' => "*Giá không được trống"
                ];
            } else if (!is_numeric($_POST['price'])) {
                $validate += [
                    'validatePrice' => "*Vui lòng nhập số"
                ];
            }
            if (empty($_POST['saleprice'])) {
                $_POST['saleprice'] = NULL;
            }

            if (!is_numeric($_POST['saleprice']) && !empty($_POST['saleprice'])) {
                $validate += [
                    'validateSalePrice' => "*Vui lòng nhập số"
                ];
            } else if (floatval($_POST["saleprice"]) > floatval($_POST["price"])) {
                $validate += [
                    'validateSalePrice' => "*Giá giảm phải nhỏ hơn giá gốc"
                ];
            }

            if (empty($validate)) {
                $name = $_POST['name'];
                $upload = $_FILES['image'];
                $content = $_POST['content'];
                $price = $_POST['price'];
                $saleprice = $_POST['saleprice'];
                $category = $_POST['category'];
                if ($upload['error'] === UPLOAD_ERR_OK) {
                    $tmp = $upload['tmp_name'];
                    $oldName = $upload['name'];
                    $newName = uniqid() . '_' . $oldName;
                    $uploadDir = 'public/uploads/';
                    if (move_uploaded_file($tmp, $uploadDir . $newName)) {
                        $image = $uploadDir . $newName;
                        if ($this->SanPhamModel->create($name, $price, $saleprice, $image, $content, $category)) {
                            header("Location: /admin");
                        }
                    }
                }
            }
        }


        $this->view('AdminLayout', [
            'pages' => 'hanghoa',
            'block' => 'SanPham/themsanpham',
            'validate' => $validate,
            'danhmuc' => $this->danhmucModel->GetAllLoaiHang()
        ]);
    }

    public function delete()
    {
        $id = $_GET['id'];
        if ($this->SanPhamModel->delete($id)) {
            header("Location: /admin");
        }
    }
}
