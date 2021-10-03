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
    public static function getAll(){
        $offer_list = [];
        require("connection_connect.php");
        $sql = "SELECT step1.offer_id,Employee.name as name_employee,Employee.employee_id,step1.Date,step1.payment,step1.name as name_customer,step1.CustomerID,step1.pay_m 
                FROM Employee INNER JOIN (SELECT offer_id,Date,payment,pay_m,Offer.CustomerID,employee_id,name 
                FROM Offer INNER JOIN Customer on Offer.CustomerID = Customer.CustomerID) as step1 on Employee.employee_id = step1.employee_id";
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
            $offer_list[] = new OfferModels($id,$date,$payment,$pay_m,$customerID,$employeeID,$name_emplpyee,$name_customer);
    }
        require("connection_close.php");
         return $offer_list;
    }
}
?>