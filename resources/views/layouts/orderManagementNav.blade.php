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
            <div class="hedinginvoice">Add Invoice <span class="closeinvoice">X</span></div>
            <hr>
<form action="">
    <div class="upperform">
<label for="invoicedate">Invoice Date</label>
<input style="margin-left:165px" type="date">
<br><label for="orderid">Order ID</label>
<input style="margin-left:142px" type="number"><br>
<label for="custemail">Customer Email</label>
<input style="margin-left:90px" type="email"><br>
<label for="custname">Customer Name</label>
<input style="margin-left:87px" type="text"><br>
</div>
<br>
<div class="productstable">
    <h2>Products</h2>
    <table>
        <tr>
            <th>Product Code</th>
            <th>Order Quantity</th>
            <th>Delivered Quantity</th>
            <th>Selling Price</th>
        </tr>
        <tr>
        <td><select name="products" id="cars">
            <option value="wire">Wire</option>
            <option value="screw">Screw</option>
            <option value="Fan">Fan</option>
            <option value="light">Light</option>
            </select></td>
            <td><input type="number" placeholder=""></td>
            <td><input type="number" placeholder=""></td>
            <td><input type="number" placeholder=""></td>
        </tr>
        <tr>
        <td><select name="products" id="cars">
            <option value="wire">Wire</option>
            <option value="screw">Screw</option>
            <option value="Fan">Fan</option>
            <option value="light">Light</option>
            </select></td>
            <td><input type="number" placeholder=""></td>
            <td><input type="number" placeholder=""></td>
            <td><input type="number" placeholder=""></td>
        </tr>
    </table>
    <a href="">Add New</a>
</div>

<div class="middleform">
<label for="totalsales">Total Sales</label>
<input style="margin-left:165px" type="number"><br>
<label  for="charges">Shipping and Handling Charges</label>
<input style="margin-left:17px" type="number"><br>
<label  for="taxpercent">Tax Percent</label>
<input style="margin-left:160px" type="number"><br>
<label for="nettotal">Net Total</label>
<input style="margin-left:180px" type="number"><br>
</div>
<br>
<hr>
<div class="paymentdiv">
    <h2>Payment Details</h2>
    <label for="amountpaid">Amount Paid</label>
    <input style="margin-left:150px" type="number"><br>
    <label for="status">Payment Status</label>
    <input style="margin-left:127px" type="text"><br>
</div>

</form>
<button type="btn" id="submitinvoicebtn">Submit</button>
        </div>
        </div> 

      

        <div class="ordermain">
   
   <header>
          @include('layouts/sidebar')
      </header>
     
      <main>
      @include('layouts/navbar') 

<div class="ordernavbar">
            <div class="ordernavdiv"><a href="\all-orders"> All orders</a></div>
            <div class="ordernavdiv"><a href="\pending-orders"> Pending orders</a></div>
            <div class="ordernavdiv"><a href="\returned-orders"> Returned Orders</a></div>
            <div class="ordernavdiv"><a href="\sold-orders"> sold orders</a></div>
            <div class="ordernavdiv"><a href="\canceled-orders"> Canceled orders</a></div>
    </div>
    <button type="btn" class="addinvoicebtn" >New Invoice</button>
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