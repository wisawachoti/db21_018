<form method="get" action="">

    <label>detail_id <input type="text" name="detail_id"
        value="<?php echo $offerdetail->detail_id;?>"/> </label><br>


    <label>offer_id <select name ="offer_id">
        <?php foreach($offerModelsList as $offer)
        {
            echo "<option value=$offer->id";
            if($offer->id==$offerdetail->offer_id)
            {
                echo " selected='selected'";
            }
            echo "> $offer->id</option>";
        }?>
    </select></label><br>         


    <label>product_id <select name ="product_id">
        <?php foreach($productModelsList as $priceProduct)
        {
            echo "<option value=$priceProduct->product_id ";
            if($priceProduct->product_id==$offerdetail->product_id)
            {
                echo " selected='selected'";
            }
            echo "> $priceProduct->pname</option>";
        }?>
    </select></label><br>
    
  
    <label>quantity <input type="text" name="quantity"
        value="<?php echo $offerdetail->quantity;?>"/> </label><br>

    <label>color_name<select name ="cp_id">
        <?php foreach($colorModelsList as $color)
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
    <input type="hidden" name="detailid" value="<?php echo $offerdetail->detail_id; ?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="upd"> Update </button>
       


</form>