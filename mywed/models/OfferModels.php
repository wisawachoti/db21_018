<?php
 class OfferModels{
    public $id;
    public $date;
    public $payment;
    public $pay_m;
    public $customerID;
    public $employeeID;
    public function _construct ($id,$date,$payment,$pay_m,$customerID,$employeeID){
        $this->id = $id;
        $this->date = $date;
        $this->payment = $payment;
        $this->pay_m = $pay_m;
        $this->customerID = $customerID;
        $this->employeeID = $employeeID;
    }
    public static function getAll(){
        $offer_list = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Offer`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $id = $my_row['offer_id'];
            $date = $my_row['Date'];
            $payment = $my_row['payment'];
            $pay_m = $my_row['pay_m'];
            $customerID = $my_row['CustomerID'];
            $employeeID = $my_row['employee_id'];
            $offer_list[] = new OfferModels($id,$date,$payment,$pay_m,$customerID,$employeeID);
    }
        require("connection_close.php");
         return $offer_list;
    }
}
?>