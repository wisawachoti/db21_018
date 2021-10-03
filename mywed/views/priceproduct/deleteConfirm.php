<?php echo "<br>Are you sure to delete this student <br>
            <br>  $priceproduct->product_id  $priceproduct->price_color  $priceproduct->price 
            $priceproduct->detail  $priceproduct->quantity  $priceproduct->qtyp_id<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="priceproduct"/>
    <input type="hidden" name="qtyp" value="<?php echo $priceproduct->qtyp_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
