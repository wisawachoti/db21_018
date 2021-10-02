<?php
class offerController{
    public function index(){
        $offerr_list = Offer::getAll();
        require_once('views/offer/index_offer.php');
    }

}
?>