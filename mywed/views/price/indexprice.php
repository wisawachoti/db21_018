<table border = 3>
<tr> <td>product_id</td>
<td>pname</td>
<td>price_color</td>
<td>price</td>
<td>detail</td>
<td>quantity</td>
<td>update</td><td>delete</td> </tr>
<?php foreach($pricemodelsList as $priceproduct)
{
    echo "<tr> <td>$priceproduct->product_id</td>
    <td>$priceproduct->pname</td>
    <td>$priceproduct->price_color</td> <td>$priceproduct->price</td> 
    <td>$priceproduct->detail</td> <td>$priceproduct->quantity</td> 
    <td>udate</td> <td>delete</td> </tr>";
}
echo "</table>";
?>
    