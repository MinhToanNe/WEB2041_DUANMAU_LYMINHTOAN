<?php
class Loaihangcontroller extends Controller
{
    private $loaihang;
    public function __construct()
    {
        $this->loaihang = $this->model("LoaiHangModel");
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
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $name = $_POST['tenloai'];
            $this->loaihang->CreateLoaiHang($name);
            header ("Location:/loaihang");
        }
        
        
        $this->view("Adminlayout", [
        "pages" => "loaihang",
        "block" => "loaihang/themloaihang"
       
    ]);

    }
}
