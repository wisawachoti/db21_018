<table border = 3>
<tr> <td>รหัสสินค้า</td>
<td>ชื่อสินค้า</td>
<td>ราคาของสี</td>
<td>ราคาสินค้า</td>
<td>จำนวนขั้นต่ำ</td>
<td>จำนวนสินค้า</td>
<td>update</td><td>delete</td> </tr>
<?php foreach($pricemodelsList as $priceproduct)
{
    echo "<tr> <td>$priceproduct->product_id</td>
    <td>$priceproduct->pname</td>
    <td>$priceproduct->price_color</td> <td>$priceproduct->price</td> 
    <td>$priceproduct->detail</td> <td>$priceproduct->quantity</td> 
    <td>  <a href=?controller=priceproduct&action=updateForm&product_id=$priceModels->product_id> update </td>
    <td>delete</td> </tr>";
}
echo "</table>";
 ?>