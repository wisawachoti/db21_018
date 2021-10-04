<?php
class offerController{
    public function index(){
        $offer_list = OfferModels::getAll();
         require_once('views/offer/index_offer.php');
    }
    public function newOffer(){
        $employee_list = EmployeeModels::getAll();
        $customer_list = CustomerModels::getAll();
        require_once('views/offer/newOffer.php');
    }
    public function addOffer(){
        $offerid = $_GET['offerid'];
        $date = $_GET['date'];
        $payment = $_GET['payment'];
        $paym = $_GET['paym'];
        $emID = $_GET['emID'];
        $cusID = $_GET['cusID'];
        OfferModels::Add($offerid,$date,$payment,$paym,$cusID,$emID);
        offerController::index();
    }
    public function updateForm()
     {
         $offer_id = $_GET['offer_id'];
         $offer = OfferModels::get($offer_id);
         $EmployeeModelsList = EmployeeModels::getAll();
         $CustomerModelsList = CustomerModels::getAll();
         require_once('views/offer/updateForm.php');
     }
     

    public function search(){
        $key = $_GET['key'];
        $offer_list = OfferModels::search($key);
        require_once('views/offer/index_offer.php');
    }
    public function deleteconfirm()
     {
        $offer_id = $_GET['offer_id'];
        $offer = OfferModels::get($offer_id);
        require_once('views/offer/deleteConfirm.php');
     }
     public function delete()
     {
         $offer_id = $_GET['offer_id'];
         OfferModels::delete($offer_id);
         offerController::index();
     }
     public function update()
     {
        $offer_id = $_GET['offer_id'];
        $customerID = $_GET['customer_id'];
        $date = $_GET['date'];
        $payment = $_GET['payment'];
        $pay_m = $_GET['pay_m'];
        $employeeID= $_GET['employee_id'];
        $offer = $_GET['offer'];    
        OfferModels::update($offer_id,$customerID,$date,$payment,$pay_m,$employeeID,$offer);
        offerController::index();
     }
}
?>