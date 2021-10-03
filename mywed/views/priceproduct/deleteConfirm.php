<?php echo "<br>Are you sure to delete this student <br>
            <br> $priceModels->product_id $priceModels->price_color $priceModels->price 
            $priceModels->detail $priceModels->quantity $priceModels->qtyp_id";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="priceproduct"/>
    <input type="hidden" name="product_id" value="<?php echo $priceModels->product_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
