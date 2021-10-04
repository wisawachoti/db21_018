<?php
class DetaildbController{


    public function index(){
        $offerdetailList = offerdetailModel::getAll();
        require_once('views/detaildb/index.php');
    }

    public function un(){

        $detail_id2 = $_GET['detail_id'];
        $offer_id2 = $_GET['offer_id'];
        $product_id2 = $_GET['product_id'];
        $quantity2 = $_GET['quantity'];
        $detailid2 = $_GET['detailid'];
        $keyc = $_GET['product_id'];

        $key = $_GET['detail_id'];
        $offerdetail =  offerdetailModel::get($key);
        $colorModelsList = colorModel::getcolor($keyc);
        require_once('views/detaildb/next/upnext.php');
    }

    public function an(){

        $offer_id2 = $_GET['offer_id'];
        $product_id2 = $_GET['product_id'];
        $quantity2 = $_GET['quantity'];
        $keyc = $_GET['product_id'];
        $colorModelsList = colorModel::getcolor($keyc);
        require_once('views/detaildb/next/addnext.php');
    }


    public function search()
    {
        $key = $_GET['key'];
        $offerdetailList = offerdetailModel::search($key);
        require_once('views/detaildb/index.php');
    }

    public function newofferdetail()
    {

        $productModelsList = productModels::getAll();
        $offerModelsList = OfferModels::getAll();
        require_once('views/detaildb/add.php');

    }

    public function addofferdetail()
    {
        
        $offer_id = $_GET['offer_id'];
        $product_id = $_GET['product_id'];
        $quantity = $_GET['quantity'];
        $printt  = $_GET['printt'];
        $cp_id = $_GET['cp_id'];
 
        offerdetailModel::Add($offer_id,$product_id,$quantity,$printt,$cp_id);
        DetaildbController::index();

     }

    public function update()
    {


        $key = $_GET['detail_id'];
      
        $offerdetail =  offerdetailModel::get($key);
        $productModelsList = productModels::getAll();
        $offerModelsList = OfferModels::getAll();
      
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



    public function deleteconfirm()
    {
       $detailid = $_GET['detailid'];

       $offerdetail = offerdetailModel::get($detailid);

       $keyc = $_GET['cp_id'];
       $colord = colorModel::get($keyc);
       require_once('./views/detaildb/delete.php');
    }

    public function delete()
    {
        $detailid= $_GET['detailid'];
        offerdetailModel::delete($detailid);
        DetaildbController::index();
    }

}
?>