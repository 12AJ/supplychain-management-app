<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/updateOrder.css">
</head>
<body>


    <!-- ######################## this code for update invoice form ######################### -->
<div class="addinvoicediv">
    <div class="addinvoice">
            <div class="hedinginvoice">Update Order <a href="\all-orders"class="closeinvoice">X</a></div>
            <hr>
     @foreach($fetchedDatas as $fetchedData)    
<form action="/updateStatus/{{$id}}" method="POST">
    @csrf
    <div class="upperform">
<!-- <label for="invoicedate">Invoice Date</label>
<input style="margin-left:165px" type="date">
<br><label for="orderid">Order ID</label>
<input style="margin-left:142px" type="number"><br> -->
<div>
<label for="custemail">Customer Email</label>
<input style="margin-left:120px" name="custemail" type="email" value={{$fetchedData->customer_email}}>
</div><br>
<div>
<label for="custname">Customer Name</label>
<input style="margin-left:120px" name="custname" type="text" value={{$fetchedData->customer_name}}>
</div>
<br>
<div>
<label for="orderstatus">Order Status</label>
<select style="margin-left:150px" name="orderstatus" id="cars">
            <option>{{$fetchedData->order_status}} </option>
            <option value="Pending Order">Pending Order</option>
            <option value="Returned Order">Returned Order</option>
            <option value="Canceled Order">Canceled Order</option>
            <option value="Sold Order">Sold Order</option>
            </select>
            </div>
</div>
<br>


<script>
   
    function addProductData(){
      
     
        let addedProductRow =   document.getElementsByClassName('addedProductRow');
      addedProductRow[0].style.display = 'contents';
      
    }


</script>



<div class="productstable">
    <h2>Products</h2>
    <table id="myTable">
        <tr>
            <th>Product Code</th>
            <th>Order Quantity</th>
            <th>Delivered Quantity</th>
            <th>Selling Price</th>
        </tr>
        @foreach($products as $product)
        @if($product->order_id === $fetchedData->customer_email)
        <tr >
        <td><select name="product_name" id="cars">
            <option >{{$product->product_name}} </option>
            <option value="wire">Wire</option>
            <option value="screw">Screw</option>
            <option value="Fan">Fan</option>
            <option value="light">Light</option>
            </select></td>
            <td><input type="number" step="any"name="product_quantity" placeholder="Sell Quantity" value={{$product->product_quantity}}></td>
            <td><input type="number" step="any" name="delivered_quantity" placeholder="Delivered Quantity" value={{$product->delivered_quantity}}></td>
            <td><input type="number" step="any" name="selling_price" placeholder="Selling Price" value={{$product->selling_price}}></td>
        </tr>
       @endif
       @endforeach
    </table>
    <br>
    <!-- <input type="button" id="addnewproductbtn" onClick="addProductData()" value="Add New"> </input> -->
</div>

<div class="middleform">
    <div>
<label for="totalsales">Total Sales</label>
<input style="margin-left:165px" name="totalsales" type="number" step="any" value={{$fetchedData->total_sales}}>
</div><br>
<div>
<label  for="shippingcharges">Shipping and Handling Charges</label>
<input style="margin-left:30px" name="shippingcharges" type="number" step="any" value={{$fetchedData->shipping_charges}}>
</div><br>
<div>
<label  for="taxpercent">Tax Percent</label>
<input style="margin-left:158px" name="taxpercent" type="number" step="any" value={{$fetchedData->tax_percent}}>
</div><br>
<div>
<label for="nettotal">Net Total</label>
<input style="margin-left:173px" name="nettotal" type="number" step="any" value={{$fetchedData->net_total}}>
</div>
</div>
<br>
<hr>
<div class="paymentdiv">
    <h2>Payment Details</h2><br>
    <div>
    <label for="amoutpaid">Amount Paid</label>
    <input style="margin-left:152px" name="amoutpaid" type="number" step="any" value={{$fetchedData->amout_paid}}>
    </div><br>
    <div>
    <label for="paymentstatus">Payment Status</label>
    <input style="margin-left:139px" name="paymentstatus" type="text" value={{$fetchedData->payment_status}}>
    </div>
</div>

<button type="btn" id="submitinvoicebtn">Update</button>
</form>
@endforeach
        </div>
        </div> 
       
</body>
</html>