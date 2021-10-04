<?php
 class OfferModels{
    public $id;
    public $name_employee;
    public $name_customer;
    public $date;
    public $payment;
    public $pay_m;
    public $customerID;
    public $employeeID;
   
    public function __construct ($id,$date,$payment,$pay_m,$customerID,$employeeID,$name_emplpyee,$name_customer){
        $this->id = $id;
        $this->date = $date;
        $this->payment = $payment;
        $this->pay_m = $pay_m;
        $this->customerID = $customerID;
        $this->employeeID = $employeeID;
        $this->name_employee = $name_emplpyee;
        $this->name_customer = $name_customer;
    }
    
    public static function Add($offerid,$date,$payment,$paym,$cusID,$emID)
    {
        require("connection_connect.php");
        $sql = " INSERT INTO `Offer` (`offer_id`,`Date`,`payment`,`pay_m`,`CustomerID`,`employee_id`) 
                 VALUES ('$offerid','$date','$payment','$paym','$cusID','$emID')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
    public static function get($offer_id)
    {
        require("connection_connect.php");
        $sql = "SELECT step1.offer_id,Employee.name as name_employee,Employee.employee_id,step1.Date,step1.payment,step1.name as name_customer,step1.CustomerID,step1.pay_m 
                FROM Employee INNER JOIN (SELECT offer_id,Date,payment,pay_m,Offer.CustomerID,employee_id,name 
                FROM Offer INNER JOIN Customer on Offer.CustomerID = Customer.CustomerID) as step1 on Employee.employee_id = step1.employee_id
                WHERE step1.offer_id = $offer_id";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row['offer_id']; 
        $date = $my_row['Date'];
        $payment = $my_row['payment'];
        $pay_m = $my_row['pay_m'];
        $customerID = $my_row['CustomerID'];
        $employeeID = $my_row['employee_id'];
        $name_employee = $my_row['name_employee'];
        $name_customer = $my_row['name_customer'];
        require("connection_close.php");

        return new OfferModels($id,$date,$payment,$pay_m,$customerID,$employeeID,$name_employee,$name_customer);
    }
    public static function update($offer_id,$customerID,$date,$payment,$pay_m,$employeeID,$offer)
    {
        require("connection_connect.php");
        $sql = "UPDATE `Offer` SET `offer_id`='$offer_id',`Date`='$date',
               `payment`='$payment',`pay_m`='$pay_m',`employee_id`='$employeeID',`CustomerID`='$customerID' WHERE offer_id = $offer";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
   
    public static function search($key){
        $offer_list = [];
        require("connection_connect.php");
        $sql = "SELECT step1.offer_id,Employee.name as name_employee,Employee.employee_id,step1.Date,step1.payment,step1.name as name_customer,step1.CustomerID,step1.pay_m 
                FROM Employee INNER JOIN (SELECT offer_id,Date,payment,pay_m,Offer.CustomerID,employee_id,name 
                FROM Offer INNER JOIN Customer on Offer.CustomerID = Customer.CustomerID) as step1 on Employee.employee_id = step1.employee_id
                WHERE ((Employee.employee_id like '%$key%' and step1.employee_id like '%$key%')
                      or step1.offer_id like '%$key%' or Employee.name like '%$key%' 
                      or Employee.employee_id like '%$key%' or step1.Date like '%$key%' or step1.payment like '%$key%'
                      or step1.name like '%$key%' or step1.CustomerID like '%$key%' or step1.pay_m like '%$key%')";
             $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                    $id = $my_row['offer_id']; 
                    $date = $my_row['Date'];
                    $payment = $my_row['payment'];
                    $pay_m = $my_row['pay_m'];
                    $customerID = $my_row['CustomerID'];
                    $employeeID = $my_row['employee_id'];
                    $name_employee = $my_row['name_employee'];
                    $name_customer = $my_row['name_customer'];
                    $offer_list[] = new OfferModels($id,$date,$payment,$pay_m,$customerID,$employeeID,$name_employee,$name_customer);
    }
    
         require("connection_close.php");
         return $offer_list;
    }
    public static function delete($offer_id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM `Offer` WHERE offer_id = $offer_id";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }

    public static function getAll(){
        $offer_list = [];
        require("connection_connect.php");
        $sql = "SELECT step1.offer_id,Employee.name as name_employee,Employee.employee_id,step1.Date,step1.payment,step1.name as name_customer,step1.CustomerID,step1.pay_m 
                FROM Employee INNER JOIN (SELECT offer_id,Date,payment,pay_m,Offer.CustomerID,employee_id,name 
                FROM Offer INNER JOIN Customer on Offer.CustomerID = Customer.CustomerID) as step1 on Employee.employee_id = step1.employee_id
                Order by step1.offer_id";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $id = $my_row['offer_id'];
            $date = $my_row['Date'];
            $payment = $my_row['payment'];
            $pay_m = $my_row['pay_m'];
            $customerID = $my_row['CustomerID'];
            $employeeID = $my_row['employee_id'];
            $name_employee = $my_row['name_employee'];
            $name_customer = $my_row['name_customer'];
            $offer_list[] = new OfferModels($id,$date,$payment,$pay_m,$customerID,$employeeID,$name_employee,$name_customer);
    }
    
        require("connection_close.php");
         return $offer_list;
    }

}
?>