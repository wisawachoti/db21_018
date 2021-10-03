<form method="get" action="">
<label> offerID <input type="text" name ="offerid"/> </label><br> 
<label> Date <input type="text" name ="date"/> </label><br> 
<label> Payment <input type="text" name ="payment"/> </label><br> 

<label> EmployeeID 
    <select name="emID"> 
     <?php 
        foreach($employee_list as $em){
            echo "<option value = $em->employee_id> $em->name</option>";
        }
     ?>
    </select>
</label><br>
    
    <input type="hidden" name="controller" value="Offer"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addProduct">Save</button>
</form>