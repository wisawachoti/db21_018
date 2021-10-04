<form method="get" action="">



    <label>color_name<select name ="cp_id">
        <?php
       
        foreach($colorModelsList as $color)
        {
            echo "<option value=$color->cp_id";
            if($color->cp_id==$offerdetail->cp_id)
            {
                echo " selected='selected'";
            }
            echo "> $color->color_name</option>";
        }?>
    </select></label><br>


    <label>printt <input type="text" name="printt"
        value="<?php echo $offerdetail->printt;?>"/> </label><br>

    <input type="hidden" name="controller" value="detaildb"/>
        <input type="hidden" name="detail_id" value="<?php echo $detail_id2; ?>"/>
        <input type="hidden" name="offer_id" value="<?php echo $offer_id2; ?>"/>
        <input type="hidden" name="product_id" value="<?php echo $product_id2; ?>"/>
        <input type="hidden" name="quantity" value="<?php echo $quantity2; ?>"/>
        <input type="hidden" name="detailid" value="<?php echo $detailid2; ?>"/>
    <button type="submit" name="action" value="upd"> UPDATE </button>
       


</form>



