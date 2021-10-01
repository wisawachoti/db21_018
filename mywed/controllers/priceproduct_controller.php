<?php
class priceproduct_controller
{
    public function index() 
    {
        $pricemodelsList = priceModels::getAll();
        require_once('views/price/indexprice.php');
    }

    public function newpriceProduct()
    {
        $pricemodelsList = priceModels::getAll();
        require_once('views/price/indexprice.php');
    }

    public function addProduct()
    {
        $product_id = $_GET['product_id'];
        $price_color = $_GET['price_color'];
        $price = $_GET['price'];
        $detail = $_GET['detail'];
        $quantity = $_GET['quantity'];
        priceModels::Add($product_id,$price_color,$price,$detail,$quantity);

        priceproduct_controller::index();
     }

     public function search()
     {
         $key = $_GET['key'];
         $pricemodelsList = priceModels::search($key);
         require_once('views/price/indexprice.php');
     }
}?>