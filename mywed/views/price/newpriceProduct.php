<fome method="get" action="">
    <br>
    <label>price_color<input type="text" name="price_color"/> </label><br>
    <label>price<input type="text" name="price"/> </label><br>
    <label>detail<input type="text" name="detail"/> </label><br>
    <label>quantity<input type="text" name="quantity"/> </label><br>
    <label>product_id<select name ="price_id">
<?php foreach($pricemodelsList as $priceProduct)
{
    echo "<option value=$priceProduct->product_id > $priceProduct->pname</option>";
}?>
</select></label><br>
<input type="hidden" name="controller" value="priceproduct"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="addProduct">Save</button>
</form>