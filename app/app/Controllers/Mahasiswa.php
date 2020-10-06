<?php 
namespace App\Controllers;

class Mahasiswa extends BaseController {
    public function index() {
        echo "pabw";
    }
    public function ucapan() {
        $data["n"]=$this->request->getPost("nama"); //Post : di URL gamuncul nilai yg di inputkan, Get : di URL muncul nilai yg di inputkan
        //return view("hello");
        echo view("hello",$data);
    }
}
?>