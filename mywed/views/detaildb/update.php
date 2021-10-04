<form method="get" action="">

    <label>detail_id <input type="text" name="detail_id"
        value="<?php echo $offerdetail->detail_id;?>"/> </label><br>

    <label>offer_id <input type="text" name="offer_id"
        value="<?php echo $offerdetail->offer_id;?>"/> </label><br>
              


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
        
    <label>color_name <input type="text" name="color_name"
        value="<?php echo $offerdetail->color_name;?>"/> </label><br>

    <label>printt <input type="text" name="printt"
        value="<?php echo $offerdetail->printt;?>"/> </label><br>




    <input type="hidden" name="controller" value="detaildb"/>
    <input type="hidden" name="detailid" value="<?php echo $offerdetail->detail_id; ?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="upd"> Update </button>
       


</form>