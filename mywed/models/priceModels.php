<?php
class priceModels{
    public $product_id;
    public $price_color;
    public $price;
    public $detail;
    public $quantity;

    public function __construct($product_id,$price_color,$price,$detail,$quantity)
    {
        $this->product_id = $product_id;
        $this->price_color = $price_color;
        $this->price = $price;
        $this->detail = $detail;
        $this->quantity = $quantity;
    }

    public static function get(product_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM Quantity WHERE product_id = $product_id";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $product_id = $my_row[product_id];
        $price_color = $my_row[price_color];
        $price = $my_row[price];
        $detail = $my_row[detail];
        $quantity = $my_row[qauantity];
        require("connection_close.php");

        return new pricemodels($product_id,$price_color,$price,$detail,$quantity);
    }

    public static function getAll()
    {
        $pricemodelsList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Quantity";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $product_id = $my_row[product_id];
            $price_color = $my_row[price_color];
            $price = $my_row[price];
            $detail = $my_row[detail];
            $quantity = $my_row[quantity];
            $pricemodelsList[] = new pricemodels($product_id,$price_color,$price,$detail,$quantity);
        }
        require("connection_close.php");

        return $pricemodelsList;
    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM Quantity WHERE (product_id like '%$key%' or price_color like '%$key%' or 
        price like '%$key%' or detail like '%$key%' or quantity like '%$key%')";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $product_id = $my_row[produuct_id];
            $price_color = $my_row[price_color];
            $price = $my_row[price];
            $detail = $my_row[detail];
            $quantity = $my_row[quantity];
            $pricemodelsList[] = new pricemodels($product_id,$price_color,$price,$detail,$quantity);
        }
        require("connection_close.php");

        return $pricemodelsList;
    }

    public static function update($product_id,$price_color,$price,$detail,$quantity)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO Quantity(product_id,price_color,price,detail,quaantity) values 
        ('product_id','price_color','price','detail','quantity')";
        $result = $conn->query($sql);
        require("connect_cloes.php");
        return "add success $result rows";
    }

    public static function update($product_id,$price_color,$price,$detail,$quantity)
    {
        require("connection_connect.php");
        $sql = "UPDATE Quantity SET product_id = '$product_id',price_color = '$price_color',price = '$price',detail = '$detail',quantity = '$quantity'";
        $result = $conn->query($sql);
        require("coonnection_close.php");
        return "update success $result row";
    }

    public static function delete($product_id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM Quantity WHERE product_id = $product_id";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}?>