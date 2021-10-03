<form method="get" action="">

    <label>qtyp_id <input type="text" name="qtyp_id"
        value="<?php echo $priceproduct->qtyp_id;?>"/> </label><br>

    <label>price_color <input type="text" name="price_color"
        value="<?php echo $priceproduct->price_color;?>"/> </label><br>

    <label>price <input type="text" name="price"
        value="<?php echo $priceModels->price;?>"/> </label><br>
        
    <label>detail <input type="text" name="detail"
        value="<?php echo $priceproduct->detail;?>"/> </label><br>

    <label>quantity <input type="text" name="quantity"
        value="<?php echo $priceproduct->quantity;?>"/> </label><br>

    <label>product_id <select name ="product_id">
        <?php foreach($productModelsList as $priceProduct)
        {
            echo "<option value=$priceProduct->product_id ";
            if($priceProduct->product_id==$priceproduct->product_id)
            {
                echo "selected='selected'";
            }
            echo "> $priceProduct->pname</option>";
        }?>
        </select></label><br>
       
    <input type="hidden" name="controller" value="priceproduct"/>
    <input type="hidden" name="qtyp" value="<?php echo $priceproduct->qtyp_id; ?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>
</form>