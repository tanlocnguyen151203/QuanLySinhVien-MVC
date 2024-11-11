<?php
class Product extends Controller{
    public $model_product;
    public $data = [];

    public function __construct(){
        $this->model_product = $this->model('ProductModel');
    }

    public function index(){
        echo 'Danh sach san pham';
    }

    public function list_product(){
        $product = $this->model_product;
        $dataPro = $product->getProductList();

        $this->data['product_list'] = $dataPro;

        // Render Giao dien
        $this->render('products/list');
    }

    public function detail(){
        $this->render('layouts/layout');
    }
}
?>