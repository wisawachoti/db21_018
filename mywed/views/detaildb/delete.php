<?php echo "<br>Are you sure to delete this student <br>
            <br>offer_id :$offerdetail->offer_id 
            <br>product_id:$offerdetail->product_id
            <br>quantity:$offerdetail->quantity
            <br>cp_id:$keyc
            <br>print:$offerdetail->printt ";?>

<form method="get" action="">
    <input type="hidden" name="controller" value="detaildb"/>
    <input type="hidden" name="detailid" value="<?php echo $offerdetail->detail_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
