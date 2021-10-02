<fome method="get" action="">
    <br>
    <label>ราคาของสี<input type="text" name="price_color"/> </label><br>
    <label>ราคาสินค้า<input type="text" name="price"/> </label><br>
    <label>จำนวนขั้นต่ำ<input type="text" name="detail"/> </label><br>
    <label>จำนวนสินค้า<input type="text" name="quantity"/> </label><br>
    <label>รหัสสินค้า<select name ="price_id">
<?php foreach($productlsList as $priceProduct)
{
    echo "<option value=$priceProduct->product_id > $priceProduct->pname</option>";
}?>
</select></label><br>
<input type="hidden" name="controller" value="priceproduct"/>
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="addProduct">Save</button>
</form>