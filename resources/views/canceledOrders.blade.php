<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/canceledOrders.css">
    <script src="https://kit.fontawesome.com/581f0d913a.js" crossorigin="anonymous"></script>
</head>
<body>
@include('layouts/orderManagementNav') 
<div class="ordermainclass">

   
 
<table >
        <tr >
            <th colspan="6" class="tableheading">Canceled Orders</th>
        </tr>
        <tr>
            <th>Order Id</th>
            <th>Order Date</th>
            <th>Retailer</th>
            <th>Update Order</th>
            <th>Delete Order</th>
             <th>See in detail </th>
        </tr>
        <?php
    foreach($fetchedData as $value){
        if($value->order_status === "Canceled Order"){
        ?>
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->customer_name}}</td>
            <td><button class="mybtns"><a  href="/updateStatus/{{$value->id}}" >update order</a></button></td>
            <td><button class="mybtns"><a href="deleteOrder/{{$value->id}}">Delete</a></button></td>
            <td><a href="/see-details/{{$value->id}}"><i class="fa-solid fa-eye"></i></a></td>

        </tr>

        <?php
        }
    } ?>


    </table>

    </div>
    
</body>
</html>