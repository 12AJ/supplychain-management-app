<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/viewDetails.css">
</head>
<body>








  <!-- ######################## this code for view Details  ######################### -->
<div class="viewdetailsmain">
    <div class="viewdetails">
            <div class="hedingviewdetails">Details <a href="\all-orders"class="closedetails">X</a></div>
            <hr>
           
   
    <div class="upperform">
    <?php
        foreach($orders as $order){
            // if($order->id  === $id){
            ?>
<div class="viewdetailselements">
<h2 class="floatright">Customer Email</h2>
<h2>{{$order->customer_email}}</h2>
</div>
<br>
<div class="viewdetailselements">
<h2 class="floatright">Customer Name</h2>
<h2 >{{$order->customer_name}}</h2>
</div>
<br>
<div class="viewdetailselements">
<h2 class="floatright">Order Status</h2>
<h2 >{{$order->order_status}}</h2>
</div>
<br>
<?php 
        }   ?>
</div>
<br>
<div class="middleform">
<div class="viewdetailselements">
<h2 class="floatright">Total Sales</h2>
<h2>{{$order->total_sales}}</h2>
</div>
<div class="viewdetailselements">
<h2 class="floatright">Shipping and Handling Charges</h2>
<h2>{{$order->shipping_charges}}</h2>
</div>
<div class="viewdetailselements">
<h2 class="floatright">Tax Percent</h2>
<h2 >{{$order->tax_percent}}</h2>
</div>
<div class="viewdetailselements">
<h2 class="floatright">Net Total</h2>
<h2 >{{$order->net_total}}</h2>
</div>
</div>

<br>
<hr>
<div class="paymentdiv">
    <h2>Payment Details</h2><br>
    <div class="viewdetailselements">
        <h2 class="floatright">Amount Paid</h2>
        <h2 >{{$order->amout_paid}}</h2>
        </div>
        <div class="viewdetailselements">
        <h2 class="floatright" >Payment Status</h2>
        <h2 >{{$order->payment_status}}</h2>
        </div>
</div><br>


      

<div class="productstable">
    <h2>Products</h2>

    <table id="myTable">
        
        <tr>
            <th>Product Code</th>
            <th>Order Quantity</th>
            <th>Delivered Quantity</th>
            <th>Selling Price</th>
        </tr>
        <?php
        foreach($products as $product){
            if($product->order_id === $order->customer_email){
            ?>
        <tr >
        <td>{{$product->product_name}}</td>
        <td>{{$product->product_quantity}}</td>
        <td>{{$product->delivered_quantity}}</td>
        <td>{{$product->selling_price}}</td>
        </tr>
    
    <?php }
        }
           ?>
</div>



</body>
</html>