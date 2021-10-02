<?php
class offerController{
    public function index(){
        $offer_list = OfferModel::getAll();
        require_once('views/offer/index_offer.php');
    }

}
?>