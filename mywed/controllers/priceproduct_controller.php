<?php
class priceproduct_controller
{
    public function index() 
    {
        $pricemodelsList = priceModels::getAll();
        require_once('views/price/indexprice.php');
    }
}?>