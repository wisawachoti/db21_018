<?php
class priceproduct_controller
{
    public function index() 
    {
        $pricemodels_list = priceModels::getAll();
        require_once('views/price/indexprice.php');
    }
}?>