<style>
    .content-table {
        border-collapse: collapse;
        margin: auto;
        font-size: 0.9em;
        min-width: 500px;
        border-radius: 12px 12px 12px 12px;
        overflow: hidden;
        /*box-shadow: 0 0 8px rgba(10, 50, 50, 5);*/
    }

    .content-table thead tr {
        background-color: rgb(64, 30, 15);
        border-bottom: 1px rgb(64, 30, 15);
        border-left: 1px rgb(64, 30, 15);
        border-right: 1px rgb(64, 30, 15);
        color: #ffffff;
        text-align: center;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
    }
    .content-table th ,
    .content-table td {
        padding: 12px 15px;
    }
    .content-table tbody tr {
        text-align: center;
        color:#000000;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        border-bottom: 1px solid #e6dbd8;
        border-left: 1px solid #e6dbd8;
        border-right: 1px solid #e6dbd8;
    }
    .content-table tbody tr:nth-of-type(even) {
        background-color: #e6dbd8;
    }
    .content-table tbody tr:nth-of-type(odd) {
        background-color: #f0e7e4;
    }
    .content-table tbody tr:last-of-type {
        border-bottom: 5px solid rgb(64, 30, 15);
    }
    
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    
    input[type=text] {
        width: 10%;
        padding: 5px 8px;
        margin: 5px 0px;
        text-align: center;
        box-sizing: border-box;
        border: none;
        background-color: rgb(64, 30, 15);
        color: white;
    }
    .button {
        padding: 5.75px 8px;
        text-align: center;
        text-decoration: none;
        font-size: 12px;
        margin: 0px 0px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: rgb(64, 30, 15); 
        color: white; 
        border: 2px solid rgb(64, 30, 15);
    }

    .button1:hover {
        background-color: white;
        color: rgb(64, 30, 15);
        border: 2px solid white;
    }

</style>
<html><body>
<br>
ชุษณะ วิไลวณิชวงศ์ 6220500610

<br> new offer <a href="?controller=offer&action=newOffer"> click </a><br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="offer"/>
    <button type="submit" name="action" value="search">
Search</button>
</body></form></html>
<table class= "content-table" border = 3><thead>
<tr> 
     <td>offer_id</td> 
     <td>CustomerName</td> 
     <td>CustomerID</td> 
     <td>Date</td> 
     <td>payment</td> 
     <td>pay_m</td> 
     <td>EmployeeName</td> 
     <td>employeeID</td>
     <td>update</td>
     <td>delete</td> 
</tr>
 <?php foreach($offer_list as $Offer){
    echo "<tr> 
                 <td>$Offer->id</td> 
                 <td>$Offer->name_customer</td> 
                 <td>$Offer->customerID</td>
                 <td>$Offer->date</td> 
                 <td>$Offer->payment</td> 
                 <td>$Offer->pay_m</td> 
                 <td>$Offer->name_employee</td> 
                 <td>$Offer->employeeID</td>  
                 <td>  <a href=?controller=offer&action=updateForm&offer_id=$Offer->id> update</a> </td>
                 <td>  <a href=?controller=offer&action=deleteConfirm&offer_id=$Offer->id> delete</a> </td>
                 
          </tr>";
 }
    echo "</table>";
 
?>
 </tbody>