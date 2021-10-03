<?php
class DetaildbController{
    public function index(){
        $offerdetailList = offerdetailModel::getAll();
        require_once('views/detaildb/index.php');
    }

    public function search()
    {
        $key = $_GET['key'];
        $offerdetailList = offerdetailModel::search($key);
        require_once('views/detaildb/index.php');
    }

    public function update()
    {
        $key = $_GET['detail_id'];
        $offerdetail =  offerdetailModel::get($key);
        $productModelsList = productModels::getAll();
        require_once('views/detaildb/update.php');
        
    }

    // public function update()
    // {

    //     $offer_id = $_GET['offer_id'];
    //     $quantity = $_GET['quantity'];
    //     $product_id = $_GET['product_id'];
    //     $printt  = $_GET['printt'];
    //     $color_name = $_GET['color_name'];
     
    //    offerdetailModel::update($offer_id,$product_id,$quantity,$printt,$color_name);
    //    DetaildbController::index();
    // }

}
?>