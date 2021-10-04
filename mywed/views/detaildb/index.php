<p>วิศวะ โชติพันธุ์พงศ์</p>

<br>new priceProduct <a href=?controller=detaildb&action=newofferdetail>Click</a><br>

<table border=1>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="detaildb"/>
    <button type="submit" name="action" value="search">
Search</button>
</form>

    <tr>
        <td>NO</td>
        <td>รหัสใบเสนอราคา</td>
        <td>รหัสสินค้า</td>
        <td>จำนวน</td>
        <td>สี</td>
        <td>จำนวนสี</td>
        <td>update</td><td>delete</td> 
    </tr>
    <?php foreach ($offerdetailList as $offerdetail) {
        echo "<tr> 
    <td>$offerdetail->detail_id</td>
    <td>$offerdetail->offer_id</td>
    <td>$offerdetail->product_id</td> 
    <td>$offerdetail->quantity</td> 
    <td>$offerdetail->color_name</td> 
    <td>$offerdetail->printt</td> 
    <td>  <a href=?controller=detaildb&action=update&detail_id=$offerdetail->detail_id&product_id=$offerdetail->product_id> update </a> </td>
    <td>  <a href=?controller=detaildb&action=deleteconfirm&detailid=$offerdetail->detail_id&cp_id=$offerdetail->cp_id> delete </a> </td>
 </tr>";
    }
    echo "</table>";
    ?>