<?php echo "<br>Are you sure to delete this Offer <br>
            <br> $offer->id $offer->name_customer <br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="offer"/>
    <input type="hidden" name="offer_id" value="<?php echo $offer->id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
