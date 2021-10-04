<form method="get" action="">




    <label>offer_id <select name ="offer_id">
        <?php foreach($offerModelsList as $offer)
        {
            echo "<option value=$offer->id";
            echo "> $offer->id</option>";
        }?>
    </select></label><br>         


    <label>product_id <select name ="product_id">
        <?php foreach($productModelsList as $priceProduct)
        {
            echo "<option value=$priceProduct->product_id ";
            echo "> $priceProduct->pname</option>";
        }

        $colorModelsList = colorModel::getcolor($priceProduct->product_id);

        ?>
    </select></label><br>
    
  
    <label>quantity <input type="text" name="quantity"/> </label><br>


    <input type="hidden" name="controller" value="detaildb"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="an"> NEXT </button>
       


</form>