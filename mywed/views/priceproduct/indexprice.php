<br>พจรินทร์ ประเสริฐศรี 6220503309
<table border = 3>
<br>new priceProduct <a href=?controller=priceproduct&action=newpriceProduct>Click</a><br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="priceproduct"/>
    <button type="submit" name="action" value="search">
Search</button>
</form>
<tr> <td>qtyp_id</td>
<td>product_id</td>
<td>pname</td>
<td>price_color</td>
<td>price</td>
<td>detail</td>
<td>quantity</td>
<td>update</td><td>delete</td> </tr>
<?php foreach($pricemodelsList as $priceproduct)
{
    echo "<tr> <td>$priceproduct->qtyp_id</td>
    <td>$priceproduct->product_id</td>
    <td>$priceproduct->pname</td>
    <td>$priceproduct->price_color</td> 
    <td>$priceproduct->price</td> 
    <td>$priceproduct->detail</td> 
    <td>$priceproduct->quantity</td> 
    <td>  <a href=?controller=priceproduct&action=updateForms&qtyp_id=$priceproduct->qtyp_id> update </a> </td>
    <td>  <a href=?controller=priceproduct&action=deleteconfirm&qtyp_id=$priceproduct->qtyp_id> delete</a> </td></tr>";
}
echo "</table>";
 ?>