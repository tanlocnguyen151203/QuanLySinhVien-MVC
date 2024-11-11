<?php
class ProductModel {
    protected $_table = 'products';

    public function getProductList(){
        $data = [
            'Item 1',
            'Item 2',
            'Item 3',
        ];

        return $data;
    }
}
?>