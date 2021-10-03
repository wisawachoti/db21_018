<?php class EmployeeModels{
    public $employee_id;
    public $name;
   
	public function __construct($employee_id,$name)
    {
        $this->employee_id = $employee_id;
        $this->name = $name;
    }

    public static function getAll()
    {
        $employeeModelsList = [];
        require("connection_connect.php");
        $sql = "SELECT employee_id,name FROM Employee";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $employee_id = $my_row['employee_id'];
            $name = $my_row['name'];
            $employeeModelsList[] = new EmployeeModels($employee_id,$name);
        }
        require("connection_close.php");

        return $employeeModelsList;
    }
}
?>