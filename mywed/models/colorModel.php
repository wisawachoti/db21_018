<?php
 class colorModel{
    public $product_id,$color_name,$cp_id;

    
    public function __construct ($product_id,$color_name,$cp_id){
        

        $this->product_id = $product_id;
        $this->color_name = $color_name;
        $this->cp_id = $cp_id;

    }
    public static function getcolor($key){
        $color_list = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Color_Product` WHERE product_id = '$key' ";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $product_id = $my_row[product_id];
            $color_name = $my_row[color_name];
            $cp_id = $my_row[cp_id];
            $color_list[] = new colorModel($product_id,$color_name,$cp_id);
    }
        require("connection_close.php");
        return $color_list;
    }
}
?>