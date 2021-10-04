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
        $keyc = $_GET['product_id'];
        $offerdetail =  offerdetailModel::get($key);
        $productModelsList = productModels::getAll();
        $offerModelsList = OfferModels::getAll();
        $colorModelsList = colorModel::getcolor($keyc);
        require_once('views/detaildb/update.php');
        
    }

    public function upd()
    {
        
        $detail_id = $_GET['detail_id'];
        $offer_id = $_GET['offer_id'];
        $product_id = $_GET['product_id'];
        $quantity = $_GET['quantity'];
        $printt  = $_GET['printt'];
        $cp_id = $_GET['cp_id'];
        $detailid = $_GET['detailid'];
        
       offerdetailModel::update($detail_id,$offer_id,$product_id,$quantity,$printt,$cp_id,$detailid);
       DetaildbController::index();
    }

}
?>