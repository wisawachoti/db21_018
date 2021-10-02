<form method="get" action="">
    
    <label>price_color<input type="text" name="price_color"
        value="<?php echo $priceModels->price_color;?>"/> </label><br>
    <label>price<input type="text" name="price"
        value="<?php echo $priceModels->price;?>"/> </label><br>
    <label>detail<input type="text" name="detail"
        value="<?php echo $priceModels->detail;?>"/> </label><br>
    <label>quantity<input type="text" name="quantity"
        value="<?php echo $priceModels->quantity;?>"/> </label><br>
    <label>product_id<select name="product_id">
        <?php foreach($priceModels as $priceM)
        {
            echo "option value=$priceM->product_id";
            if($priceM->product_id==$priceModels->product_id)
            {
                echo "selected='selected'";
            }
            echo ">$priceM->pname</option>";
        }?>
        </select></label><br>
        <input type="hidden" name="controller" value="priceproduct"/>
        <buutton type="submit" name="action" value="index">Back</button>
        <button type="submit" name="action" value="updateForm">Update</button>
    </form>