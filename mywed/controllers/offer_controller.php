<?php
class offerController{
    public function index(){
        $offer_list = OfferModels::getAll();
       // echo($offer_list[0]->id);
         require_once('views/offer/index_offer.php');
    }

}
?>