<?php

namespace App\classes;

class Product{

    private $productname;
    private $price;
    private $stockAmount;
    private $categoryName;
    private $brandName;
    private $imageFile;
    private $file;
    private $data;

    public function __construct ($data = null, $file=null){

        if($data && $file)
        {
           $this->productname = $data['product-name'];
           $this->price = $data['product-price'];
           $this->stockAmount = $data['stock'];
           $this->categoryName = $data['categoryName'];
           $this->brandName = $data['brandName'];
            $this->imageFile = $file;
        }
    }
}