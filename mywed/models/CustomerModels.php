<?php class CustomerModels{
    public $customer_id;
    public $name;
   
	public function __construct($customer_id,$name)
    {
        $this->customer_id = $customer_id;
        $this->name = $name;
    }

    public static function getAll()
    {
        $customerList = [];
        require("connection_connect.php");
        $sql = "SELECT CustomerID,Name FROM Customer";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $customer_id = $my_row['CustomerID'];
            $name = $my_row['Name'];
            $customerList[] = new CustomerModels($customer_id,$name);
        }
        require("connection_close.php");

        return $customerList;
    }
}
?>