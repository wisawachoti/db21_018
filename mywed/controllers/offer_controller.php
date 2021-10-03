<?php
class offerController{
    public function index(){
        $offer_list = OfferModels::getAll();
         require_once('views/offer/index_offer.php');
    }
    public function newOffer(){
        $employee_list = EmployeeModels::getAll();
        require_once('veiw/offer/newOffer.php');
    }

}
?>