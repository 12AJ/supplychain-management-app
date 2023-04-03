<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/orderManagementNav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<body>
<!-- ######################## this code for add invoice form ######################### -->
<div class="addinvoicediv">
    <div class="addinvoice">
            <div class="hedinginvoice">Add Order <span class="closeinvoice">X</span></div>
            <hr>
<form action="/submit-data" method="POST">
    @csrf
    <div class="upperform">
<!-- <label for="invoicedate">Invoice Date</label>
<input style="margin-left:165px" type="date">
<br><label for="orderid">Order ID</label>
<input style="margin-left:142px" type="number"><br> -->
<div>
<label for="custemail">Customer Email</label>
<input style="margin-left:90px" name="custemail" type="email">
</div><br>
<div>
<label for="custname">Customer Name</label>
<input style="margin-left:87px" name="custname" type="text">
</div><br>
<div>
<label for="orderstatus">Order Status</label>
<select style="margin-left:120px" name="orderstatus" id="cars">
            <option value="Pending Order">Pending Order</option>
            <option value="Returned Order">Returned Order</option>
            <option value="Canceled Order">Canceled Order</option>
            <option value="Sold Order">Sold Order</option>
            </select>

            </div><br>
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
        <tr >
        <td><select name="product_name" id="cars">
            <option value="wire">Wire</option>
            <option value="screw">Screw</option>
            <option value="Fan">Fan</option>
            <option value="light">Light</option>
            </select></td>
            <td><input type="number" step="any"name="product_quantity" placeholder="Sell Quantity"></td>
            <td><input type="number" step="any" name="delivered_quantity" placeholder="Delivered Quantity"></td>
            <td><input type="number" step="any" name="selling_price" placeholder="Selling Price"></td>
        </tr>
       
    </table>
    <br>
    <!-- <input type="button" id="addnewproductbtn" onClick="addProductData()" value="Add New"> </input> -->
</div>
<br>

<div class="middleform">
    <div>
<label for="totalsales">Total Sales</label>
<input style="margin-left:165px" name="totalsales" type="number" step="any" >
</div><br>
<div>
<label  for="shippingcharges">Shipping and Handling Charges</label>
<input style="margin-left:17px" name="shippingcharges" type="number" step="any" >
</div><br>
<div>
<label  for="taxpercent">Tax Percent</label>
<input style="margin-left:160px" name="taxpercent" type="number" step="any" >
</div><br>
<div>
<label for="nettotal">Net Total</label>
<input style="margin-left:180px" name="nettotal" type="number" step="any" >
</div><br>
</div>
<br>
<hr>
<div class="paymentdiv">
    <h2>Payment Details</h2>
    <br>
    <div>
    <label for="amoutpaid">Amount Paid</label>
    <input style="margin-left:150px" name="amoutpaid" type="number" step="any" >
</div><br>
<div>
    <label for="paymentstatus">Payment Status</label>
    <input style="margin-left:127px" name="paymentstatus" type="text">
    </div><br>
</div>

<button type="btn" id="submitinvoicebtn">Submit</button>
</form>

        </div>
        </div> 

      

        <div class="ordermain">
   
   <header>
          @include('layouts/sidebar')
      </header>
     
      <main>
      @include('layouts/navbar') 
     
<div class="ordernavbar">
            <div class="ordernavdiv"><a href="\all-orders"> All Orders</a></div>
            <div class="ordernavdiv"><a href="\pending-orders"> Pending Orders</a></div>
            <div class="ordernavdiv"><a href="\returned-orders"> Returned Orders</a></div>
            <div class="ordernavdiv"><a href="\sold-orders"> sold Orders</a></div>
            <div class="ordernavdiv"><a href="\canceled-orders"> Canceled Orders</a></div>
    </div>
    <button type="btn" class="addinvoicebtn" >New Order</button>
   </div>
   </main>
    <script>
       //********************Script for open add Invoice div ********************* */
            let addinvoicediv = document.querySelectorAll('.addinvoicediv');
            let addinvoicebtn = document.querySelectorAll('.addinvoicebtn');
           addinvoicebtn[0].addEventListener("click", ()=>{
            addinvoicediv[0].style.display = "block";
           })
    
    </script>

  
        <script>
            let closeinvoice = document.querySelectorAll('.closeinvoice');
            // let addinvoicediv = document.querySelectorAll('.addinvoicediv');

            closeinvoice[0].addEventListener("click" , ()=>{
                addinvoicediv[0].style.display = "none";  
            })
        </script>
<!-- ############################################################################ -->

  
</body>
</html>