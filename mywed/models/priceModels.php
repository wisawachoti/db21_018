<?php
class priceModels{
    public $product_id;
    public $pname;
    public $price_color;
    public $price;
    public $detail;
    public $quantity;
    public $qtyp_id;

    public function __construct($product_id,$pname,$price_color,$price,$detail,$quantity,$qtyp_id)
    {
        $this->product_id = $product_id;
        $this->pname = $pname;
        $this->price_color = $price_color;
        $this->price = $price;
        $this->detail = $detail;
        $this->quantity = $quantity;
        $this->qtyp_id = $qtyp_id;
    }

    public static function get($product_id)
    {
        require("connection_connect.php");
        $sql = "SELECT Quantity.product_id,pname,price_color,price,Quantity.detail,quantity,qtyp_id FROM Quantity INNER JOIN Product 
        ON  Quantity.product_id = Product.product_id  WHERE qtyp_id=$qtyp_id ";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $product_id = $my_row[product_id];
        $price_color = $my_row[price_color];
        $price = $my_row[price];
        $detail = $my_row[detail];
        $quantity = $my_row[qauantity];
        $qtyp_id = $my_row[qtyp_id];
        require("connection_close.php");

        return new priceModels($product_id,$pname,$price_color,$price,$detail,$quantity,$qtyp_id);
    }

    public static function getAll()
    {
        $pricemodelsList = [];
        require("connection_connect.php");
        $sql = "SELECT Quantity.product_id,pname,price_color,price,Quantity.detail,quantity,qtyp_id FROM Quantity INNER JOIN Product 
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
            $qtyp_id = $my_row[qtyp_id];
            $pricemodelsList[] = new priceModels($product_id,$pname,$price_color,$price,$detail,$quantity,$qtyp_id);
        }
        require("connection_close.php");

        return $pricemodelsList;
    }

    public static function search($key)
    {
        $pricemodelsList=[];
        require("connection_connect.php");
        $sql = "SELECT Quantity.product_id,pname,price_color,price,Quantity.detail,quantity FROM Quantity INNER JOIN Product 
        ON Quantity.product_id = Product.product_id WHERE ((Quantity.product_id like '%$key%' and Product.product_id like '%$key%')
         or Product.pname like '%$key%' or Quantity.price_color like '%$key%' or Quantity.price like '%$key%' 
         or Quantity.detail like '%$key%' or Product.detail like '%$key%' or Quantity.quantity like '%$key%') ";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $product_id = $my_row[product_id];
            $pname = $my_row[pname];
            $price_color = $my_row[price_color];
            $price = $my_row[price];
            $detail = $my_row[detail];
            $quantity = $my_row[quantity];
            $pricemodelsList[] = new priceModels($product_id,$pname,$price_color,$price,$detail,$quantity);
        }
        require("connection_close.php");

        return $pricemodelsList;
    }

    public static function Add($product_id,$qtyp_id,$price_color,$price,$detail,$quantity)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Quantity`(`qtyp_id`, `price`, `price_color`, `product_id`, `detail`, `quantity`) 
        VALUES ($qtyp_id,$price,$price_color,'$product_id','$detail',$quantity)";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }

    public static function update($product_id,$qtyp_id,$price_color,$price,$detail,$quantity)
    {
        require("connection_connect.php");
        $sql = "UPDATE `Quantity`
        SET `price`=$price,`price_color`= $price_color, `detail`='$detail',`quantity`=$quantity
        WHERE `qtyp_id`=$qtyp_id AND `product_id`='$product_id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($product_id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM `Quantity` WHERE product_id = $product_id";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}?>