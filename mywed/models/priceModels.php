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
        $sql = "SELECT Quantity.product_id,pname,price_color,price,Quantity.detail,quantity FROM Quantity INNER JOIN Product 
        ON  Quantity.product_id = Product.product_id";
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
            $qtyp_id = $my_row[qtyp_id];
            $pricemodelsList[] = new priceModels($product_id,$pname,$price_color,$price,$detail,$quantity,$qtyp_id);
        }
        require("connection_close.php");

        return $pricemodelsList;
    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql = "SELECT Quantity.product_id,pname,price_color,price,Quantity.detail,quantity FROM Quantity INNER JOIN Product 
        ON Quantity.product_id = Product.product_id WHERE (Quantity.product_id like '%$key%' or pname like '%$pname%' or price_color like '%$key%' or 
        price like '%$key%' or Quantity.detail like '%$key%' or quantity like '%$key%' or qtyp_id like '%$qtyp_id%')";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $product_id = $my_row[produuct_id];
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

    public static function add($product_id,$pname,$price_color,$price,$detail,$quantity,$qtyp_id)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO Quantity(product_id,price_color,price,detail,quantity,qtyp_id) values 
        ('product_id','pname','price_color','price','detail','quantity','qtyp_id')";
        $result = $conn->query($sql);
        require("connect_cloes.php");
        return "add success $result rows";
    }

    public static function update($product_id,$pname,$price_color,$price,$detail,$quantity,$qtyp_id)
    {
        require("connection_connect.php");
        $sql = "UPDATE Quantity SET product_id = '$product_id',price_color = '$price_color',
        price = '$price',detail = '$detail',quantity = '$quantity',qtyp_id = '$qtyp_id'";
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