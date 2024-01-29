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
    { $this->view("Adminlayout", [
        "pages" => "loaihang",
        "block" => "loaihang/themloaihang"
       
    ]);

    }
}
