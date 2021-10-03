<?php echo "<br>Are you sure to delete this student <br>
            <br>  product_id:$priceproduct->product_id  <br>price_color:$priceproduct->price_color  <br>price:$priceproduct->price 
            <br>detail:$priceproduct->detail  <br>quantity:$priceproduct->quantity  <br>qtyp_id:$priceproduct->qtyp_id<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="priceproduct"/>
    <input type="hidden" name="qtyp" value="<?php echo $priceproduct->qtyp_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
