<?php
class productModels{
    public $product_id;
    public $pname;
    public $price_color;
    public $price;
    public $detail;
    public $quantity;

    public function __construct($product_id,$pname,$price_color,$price,$detail,$quantity)
    {
        $this->product_id = $product_id;
        $this->pname = $pname;
        $this->price_color = $price_color;
        $this->price = $price;
        $this->detail = $detail;
        $this->quantity = $quantity;
    }

    public static function getAll()
    {
        $productmodelsList = [];
        require("connection_connect.php");
        $sql = "SELECT Quantity.product_id,pname,price_color,price,Quantity.detail,quantity FROM Quantity INNER JOIN Product 
        ON Quantity.product_id = Product.product_id";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $product_id = $my_row[product_id];
            $pname = $my_row[pname];
            $price_color = $my_row[price_color];
            $price = $my_row[price];
            $detail = $my_row[detail];
            $quantity = $my_row[quantity];
            $productmodelsList[] = new productModels($product_id,$pname,$price_color,$price,$detail,$quantity);
        }
        require("connection_close.php");

        return $productmodelsList;
    }
}?>
