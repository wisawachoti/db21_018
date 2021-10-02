<?php
class Offer{
    public $id;
    public $date;
    public $payment;
    public $pay_m;
    public $customerID;
    public $employeeID;

    public function_construct($id,$date,$payment,$pay_m,$customerID,$employeeID){
        $this->id = $id;
        $this->date = $date;
        $this->payment = $payment;
        $this->pay_m = $pay_m;
        $this->CustomerID = $customerID;
        $this->employeeID = $employeeID;
    }

    public static function getAll(){
        $offerList = [];
        require("connection_connect.php");
        $sql = "select * from Offer";
        $result = con->query($sql);
        while($my_row = $result->fetch_assoc()){
            $id = $my_row[offer_id];
            $date = $my_row[Date];
            $payment = $my_row[payment];
            $pay_m = $my_row[pay_m];
            $customerID = $my_row[CustomerID];
            $employeeID = $my_row[employee_id];
            $offerList[] = new Offer($id,$date,$payment,$pay_m,$customerID,$employeeID);
        }
        require("connection_close.php");

        return $offerList;
    }
}
?>