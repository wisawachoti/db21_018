<p>วิศวะ โชติพันธุ์พงศ์</p>



<table border=1>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="detaildb"/>
    <button type="submit" name="action" value="search">
Search</button>
</form>

    <tr>
        <td>รหัสใบเสนอราคา</td>
        <td>รหัสสินค้า</td>
        <td>จำนวน</td>
        <td>สี</td>
        <td>จำนวนสี</td>
    </tr>
    <?php foreach ($offerdetailList as $offerdetail) {
        echo "<tr> 
    <td>$offerdetail->offer_id</td>
    <td>$offerdetail->product_id</td> 
    <td>$offerdetail->quantity</td> 
    <td>$offerdetail->color_name</td> 
    <td>$offerdetail->printt</td> 



 </tr>";
    }
    echo "</table>";
    ?>