<p>Welcome offer</p>

<table border= 1 >
<tr> 
     <td>offer_id</td> 
     <td>Date</td> 
     <td>payment</td> 
     <td>pay_m</td> 
     <td>CustomerID</td>
     <td>employeeID</td>
     <td>update</td>
     <td>delete</td> 
</tr>
 
 <?php foreach($offer_list as $Offer){
    echo "<tr> 
                 <td>$Offer->id</td> 
                 <td>$Offer->date</td>
                 <td>$Offer->payment</td> 
                 <td>$Offer->pay_m</td>
                 <td>$Offer->customerID</td> 
                 <td>$Offer->employeeID</td>
                 <td>update</td> 
                 <td>delete</td> 
         </tr>";
    }
    echo "</table>";
 
?>