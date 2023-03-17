<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/soldOrders.css">
</head>
<body>
@include('layouts/orderManagementNav') 
<div class="ordermainclass">

   
    
   
    <!-- <div class="searchfield">
    <input type="text" placeholder="Search here" class="searchinput">
    <button class="searchbtn">Search</button>
    </div> -->

   
 
<table >
        <tr >
            <th colspan="5" class="tableheading">Pending Orders</th>
        </tr>
        <tr>
            <th>Order Id</th>
            <th>Order Date</th>
            <th>Retailer</th>
            <th>Products</th>
            <th>Reason for pending</th>
        </tr>
        <tr>
            <td>1</td>
            <td>01/01/2023</td>
            <td>Origin Products</td>
            <td>1.mouse 2.keyboard</td>
            <td><select name="statusoptions" class="movetosalebtn">
            <option value="Move to Sale">Move to Sale</option>
            <option value="Payment not Done">Payment not Done</option>
            <option value="Returned Order">Returned Order</option>
            </select></td>
        </tr>
        <tr>
            <td>2</td>
            <td>02/01/2023</td>
            <td>dart</td>
            <td>Products</td>
            <td><select name="statusoptions" class="movetosalebtn">
            <option value="Move to Sale">Move to Sale</option>
            <option value="Payment not Done">Payment not Done</option>
            <option value="Returned Order">Returned Order</option>
            </select></td>
        </tr>
        <tr>
            <td>3</td>
            <td>03/01/2023</td>
            <td>Retailer</td>
            <td>Products</td>
            <td><select name="statusoptions" class="movetosalebtn">
            <option value="Move to Sale">Move to Sale</option>
            <option value="Payment not Done">Payment not Done</option>
            <option value="Returned Order">Returned Order</option>
            </select></td>
        </tr>
    </table>

    </div>   
</body>
</html>