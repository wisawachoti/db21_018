<form method="get" action="">
    <label>offer_id <input type="text" name="offer_id"
        value="<?php echo $offer->id;?>"/> </label><br>

    <label>CustomerName <select name ="customer_id">
        <?php foreach($CustomerModelsList as $customer)
        {
            echo "<option value=$customer->customer_id ";
            if($customer->customer_id == $offer->customerID)
            {
                echo " selected='selected'";
            }
            echo "> $customer->name</option>";
        }?>
    </select></label><br>

    <label>Date <input type="text" name="date"
        value="<?php echo $offer->date;?>"/> </label><br>

    <label>payment <input type="text" name="payment"
        value="<?php echo $offer->payment;?>"/> </label><br>
    
    <label>pay_m <input type="text" name="pay_m"
        value="<?php echo $offer->pay_m;?>"/> </label><br>
    
    <label>EmployeeName <select name ="employee_id">
        <?php foreach($EmployeeModelsList as $employee)
        {
            echo "<option value=$employee->employee_id";
            if($employee->employee_id==$offer->employeeID)
            {
                echo " selected='selected'";
            }
            echo "> $employee->name</option>";
        }?>
    </select></label><br>
    
  
       
    <input type="hidden" name="controller" value="offer"/>
    <input type="hidden" name="offer" value="<?php echo $offer->id;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>
</form>