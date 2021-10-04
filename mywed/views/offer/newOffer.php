<form method="get" action="">
<label> offerID <input type="text" name ="offerid"/> </label><br> 
<label> Date <input type="text" name ="date"/> </label><br> 
<label> Payment <input type="text" name ="payment"/> </label><br> 
<label> pay_m <input type="text" name ="paym"/> </label><br>

<label> EmployeeName 
    <select name="emID"> 
     <?php 
        foreach($employee_list as $em){
            echo "<option value = $em->employee_id> $em->name</option>";
        }
     ?>
    </select>
</label><br>
<label> CustomerName
    <select name="cusID"> 
     <?php 
        foreach($customer_list as $cus){
            echo "<option value = $cus->customer_id> $cus->name</option>";
        }
     ?>
    </select>
</label><br>
    
    <input type="hidden" name="controller" value="offer"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addOffer">Save</button>
</form>