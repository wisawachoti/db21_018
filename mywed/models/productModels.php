<?php
class productModels{
    public $product_id;
    public $pname;
    public $detail;
    public $type;

    public function __construct($product_id,$pname,$detail,$t)
    {
        $this->product_id = $product_id;
        $this->pname = $pname;
        $this->detail = $detail;
        $this->type = $t;
    }

    public static function getAll()
    {
        $productmodelsList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Product";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $product_id = $my_row[product_id];
            $pname = $my_row[pname];
            $detail = $my_row[detail];
            $type = $my_row[type_id];
            $productmodelsList[] = new productModels($product_id,$pname,$detail,$type);
        }
        require("connection_close.php");

        return $productmodelsList;
    }
}?>
