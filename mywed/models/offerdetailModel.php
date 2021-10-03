<?php

class offerdetailModel{

    public $offer_id,$product_id,$quantity,$printt,$color_name,$detail_id;

    public function __construct($detail_id,$offer_id,$product_id,$quantity,$printt,$color_name)
    {
            $this->color_name = $color_name;
            $this->offer_id = $offer_id;
            $this->product_id = $product_id;
            $this->quantity = $quantity;
            $this->printt = $printt;
            $this->detail_id = $detail_id;
            
    }

    public static function get($detail_id)
    {
        require("connection_connect.php");
        $sql = "SELECT offerdetail_id,offer_id,of.product_id,quantity,of.print as pt,cp.color_name FROM offerdetail as of INNER JOIN Color_Product as cp ON cp.cp_id = of.cp_id
                  WHERE offerdetail_id=$detail_id ";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

            $offer_id= $my_row[offer_id];
            $quantity = $my_row[quantity];
            $product_id= $my_row[product_id];
            $printt = $my_row[pt];
            $color_name= $my_row[color_name];
        require("connection_close.php");

        return new offerdetailModel($detail_id,$offer_id,$product_id,$quantity,$printt,$color_name);
    }

    public static function search($key)
    {
        $offerdetailList[]=[];
        require("connection_connect.php");
        $sql = "SELECT offerdetail_id,offer_id,of.product_id,quantity,of.print as pt,cp.color_name FROM offerdetail as of INNER JOIN Color_Product as cp ON cp.cp_id = of.cp_id
        
         WHERE (of.offer_id like '%$key%' or of.product_id like '%$key%' or of.quantity like '%$key%' or of.print like '%$key%' or cp.color_name like '%$key%') ";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $detail_id= $my_row[offerdetail_id];
            $offer_id= $my_row[offer_id];
            $quantity = $my_row[quantity];
            $product_id= $my_row[product_id];
            $printt = $my_row[pt];
            $color_name= $my_row[color_name];

            $offerdetailList[] = new offerdetailModel($detail_id,$offer_id,$product_id,$quantity,$printt,$color_name);
            
        }
        require("connection_close.php");

        return $offerdetailList;
    }


    public static function update($offer_id,$product_id,$quantity,$printt,$color_name)
    {
        require("connection_connect.php");
        $sql = "UPDATE `offerdetail`
        SET `offer_id`=$offer_id,`product_id`= $product_id, `print`='$printt',`cp.color_name`=$color_name,`quantity`=$quantity
        WHERE `offer_id`=$offer_id AND `product_id`='$product_id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($offer_id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM Quantity WHERE offer_id = $offer_id AND product_id`= $product_id AND `cp.color_name`=$color_name";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }




    public static function getAll(){

        $offerdetailList = [];
        require("connection_connect.php");
        $sql = "SELECT offerdetail_id,offer_id,of.product_id,quantity,of.print as pt,cp.color_name FROM offerdetail as of INNER JOIN Color_Product as cp ON cp.cp_id = of.cp_id";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {

            $detail_id= $my_row[offerdetail_id];
            $offer_id= $my_row[offer_id];
            $quantity = $my_row[quantity];
            $product_id= $my_row[product_id];
            $printt = $my_row[pt];
            $color_name= $my_row[color_name];



            $offerdetailList[] = new offerdetailModel($detail_id,$offer_id,$product_id,$quantity,$printt,$color_name);
            
        }
        require("connection_close.php");

        return $offerdetailList;
    }



}
