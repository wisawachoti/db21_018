<?php
class priceproduct_controller
{
    public function index() 
    {
        echo "INDEX";
        $pricemodelsList = priceModels::getAll();
        require_once('./views/price/indexprice.php');
    }

    public function newpriceProduct()
    {
        echo "new";
        $pricemodelsList = productModels::getAll();
        require_once('./views/price/newpriceProduct.php');
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

     public function updateForm()
     {
         $product_id = $_GET['product_id'];
         $priceModels = priceModels::get($product_id);
         $pricemodelsList = priceModels::getAll();
         require_once('views/price/updateForm.php');
     }
}?>