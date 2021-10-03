<?php
class priceproduct_controller
{
    public function index() 
    {
        $pricemodelsList = priceModels::getAll();
        require_once('./views/priceproduct/indexprice.php');
    }

    public function newpriceProduct()
    {
        $productModelsList = productModels::getAll();
        $pricemodelsList = priceModels::getAll();
        require_once('./views/priceproduct/newpriceProduct.php');
    }

    public function addProduct()
    {
        $product_id = $_GET['product_id'];
        $price_color = $_GET['price_color'];
        $price = $_GET['price'];
        $detail = $_GET['detail'];
        $quantity = $_GET['quantity'];
        $qtyp_id = $_GET['qtyp_id'];
        priceModels::Add($product_id,$qtyp_id,$price_color,$price,$detail,$quantity);

        priceproduct_controller::index();
     }

     public function search()
     {
         $key = $_GET['key'];
         $pricemodelsList = priceModels::search($key);
         require_once('views/priceproduct/indexprice.php');
     }

     public function updateForms()
     {
         $pb = $_GET['product_id'];
         $priceproduct = priceModels::get($pb);
         $productModelsList = productModels::getAll();
         require_once('views/priceproduct/updateForm.php');
     }

     public function update()
     {
        $product_id = $_GET['product_id'];
        $price_color = $_GET['price_color'];
        $price = $_GET['price'];
        $detail = $_GET['detail'];
        $quantity = $_GET['quantity'];
        $qtyp_id = $_GET['qtyp_id'];
        priceModels::update($product_id,$qtyp_id,$price_color,$price,$detail,$quantity);
         priceproduct_controller::index();
     }
}?>